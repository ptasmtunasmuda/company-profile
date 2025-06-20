<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::orderBy('group')->orderBy('key')->get()->groupBy('group');
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'settings' => 'required|array',
        ]);

        foreach ($validated['settings'] as $key => $value) {
            $setting = Setting::where('key', $key)->first();
            if ($setting && $setting->type !== 'image') {
                $setting->update(['value' => $value]);
            }
        }

        // Handle file uploads - Manual storage (lebih reliable)
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $key => $file) {
                $setting = Setting::where('key', $key)->first();
                if ($setting && $setting->type === 'image') {

                    // Hapus file lama jika ada
                    if ($setting->value && \Storage::disk('public')->exists(str_replace(asset('storage/'), '', $setting->value))) {
                        \Storage::disk('public')->delete(str_replace(asset('storage/'), '', $setting->value));
                    }

                    // Simpan file baru
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $path = $file->storeAs('images', $filename, 'public');

                    // Update setting dengan full URL
                    $setting->update(['value' => asset('storage/' . $path)]);

                    // Clear spatie media (cleanup)
                    if ($setting->hasMedia('images')) {
                        $setting->clearMediaCollection('images');
                    }
                }
            }
        }

        return back()->with('success', 'Settings updated successfully.');
    }

    public function show($group)
    {
        $settings = Setting::where('group', $group)->orderBy('key')->get();

        if ($settings->isEmpty()) {
            abort(404);
        }

        return view('admin.settings.show', compact('settings', 'group'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'key' => 'required|string|unique:settings,key',
            'value' => 'nullable|string',
            'type' => 'required|in:text,textarea,email,url,image,boolean',
            'group' => 'required|string',
        ]);

        Setting::create($validated);

        return redirect()->route('admin.settings.index')
            ->with('success', 'Setting created successfully.');
    }

    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', compact('setting'));
    }

    public function updateSingle(Request $request, Setting $setting)
    {
        $validated = $request->validate([
            'key' => 'required|string|unique:settings,key,' . $setting->id,
            'value' => 'nullable|string',
            'type' => 'required|in:text,textarea,email,url,image,boolean',
            'group' => 'required|string',
        ]);

        $setting->update($validated);

        return redirect()->route('admin.settings.index')
            ->with('success', 'Setting updated successfully.');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();

        return redirect()->route('admin.settings.index')
            ->with('success', 'Setting deleted successfully.');
    }
}

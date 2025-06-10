<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::latest();

        if ($request->has('status')) {
            if ($request->status === 'read') {
                $query->read();
            } elseif ($request->status === 'unread') {
                $query->unread();
            }
        }

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%");
            });
        }

        $contacts = $query->paginate(15);

        $stats = [
            'total' => Contact::count(),
            'unread' => Contact::unread()->count(),
            'read' => Contact::read()->count(),
        ];

        return view('admin.contacts.index', compact('contacts', 'stats'));
    }

    public function show(Contact $contact)
    {
        if (!$contact->is_read) {
            $contact->markAsRead();
        }

        return view('admin.contacts.show', compact('contact'));
    }

    public function markAsRead(Contact $contact)
    {
        $contact->markAsRead();

        return back()->with('success', 'Contact marked as read.');
    }

    public function markAsUnread(Contact $contact)
    {
        $contact->update([
            'is_read' => false,
            'read_at' => null
        ]);

        return back()->with('success', 'Contact marked as unread.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact deleted successfully.');
    }

    public function bulkAction(Request $request)
    {
        $validated = $request->validate([
            'contacts' => 'required|array',
            'contacts.*' => 'exists:contacts,id',
            'action' => 'required|in:mark_read,mark_unread,delete'
        ]);

        $contacts = Contact::whereIn('id', $validated['contacts']);

        switch ($validated['action']) {
            case 'mark_read':
                $contacts->update([
                    'is_read' => true,
                    'read_at' => now()
                ]);
                $message = 'Selected contacts marked as read.';
                break;

            case 'mark_unread':
                $contacts->update([
                    'is_read' => false,
                    'read_at' => null
                ]);
                $message = 'Selected contacts marked as unread.';
                break;

            case 'delete':
                $contacts->delete();
                $message = 'Selected contacts deleted successfully.';
                break;
        }

        return back()->with('success', $message);
    }
}

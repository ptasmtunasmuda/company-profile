<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Services\SettingService;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function __construct(
        private SettingService $settingService
    ) {}

    public function index(): View
    {
        $page = Page::where('slug', 'services')
            ->active()
            ->firstOrFail();

        $stats = $this->settingService->getStats();
        $contactSettings = $this->settingService->getMultiple([
            'contact_email',
            'contact_phone'
        ]);

        return view('pages.services', compact('page', 'stats', 'contactSettings'));
    }

    public function show(string $slug): View
    {
        // Define all services data
        $services = [
            'website-development' => [
                'title' => 'Website Development',
                'subtitle' => 'Solusi Website Modern & Responsif',
                'description' => 'Pengembangan website profesional dengan teknologi terkini untuk memberikan pengalaman pengguna terbaik dan performa optimal.',
                'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                'overview' => 'Website Development adalah layanan pembuatan website profesional yang dirancang khusus untuk kebutuhan bisnis modern. Kami menggunakan teknologi terkini seperti Laravel, React, dan Vue.js untuk memastikan website Anda memiliki performa tinggi, keamanan terjamin, dan user experience yang optimal.',
                'target_business' => [
                    'Startup & UMKM yang ingin hadir online',
                    'Perusahaan yang ingin meningkatkan credibility',
                    'Bisnis yang butuh platform digital marketing',
                    'Organisasi yang perlu website informasi'
                ],
                'features' => [
                    'Responsive Design' => 'Website yang optimal di semua perangkat',
                    'SEO Optimized' => 'Struktur website yang SEO-friendly',
                    'Fast Loading' => 'Performa loading dibawah 3 detik',
                    'Secure & Reliable' => 'Keamanan tingkat enterprise',
                    'CMS Integration' => 'Mudah dikelola tanpa coding',
                    'Analytics Setup' => 'Tracking dan monitoring built-in'
                ],
                'packages' => [
                    [
                        'name' => 'Basic Website',
                        'price' => 'Rp 2.999.000',
                        'duration' => '2-3 minggu',
                        'features' => [
                            '5 halaman utama',
                            'Responsive design',
                            'Domain & hosting 1 tahun',
                            'SEO basic setup',
                            'Contact form',
                            'Google Analytics'
                        ],
                        'ideal_for' => 'UMKM, Personal Brand, Portfolio'
                    ],
                    [
                        'name' => 'Business Website',
                        'price' => 'Rp 5.999.000',
                        'duration' => '3-4 minggu',
                        'features' => [
                            '10 halaman + blog',
                            'Advanced design',
                            'CMS integration',
                            'SEO advanced',
                            'Live chat integration',
                            'Social media integration',
                            'Speed optimization'
                        ],
                        'ideal_for' => 'Perusahaan Menengah, Agency, Konsultan'
                    ],
                    [
                        'name' => 'Enterprise Website',
                        'price' => 'Mulai Rp 12.000.000',
                        'duration' => '6-8 minggu',
                        'features' => [
                            'Unlimited halaman',
                            'Custom functionality',
                            'Multi-language support',
                            'Advanced integrations',
                            'Custom dashboard',
                            'API integrations',
                            'Premium support'
                        ],
                        'ideal_for' => 'Korporat, Multinational, Complex Business'
                    ]
                ],
                'technologies' => [
                    'Frontend' => ['HTML5', 'CSS3', 'JavaScript', 'React', 'Vue.js'],
                    'Backend' => ['Laravel', 'Node.js', 'PHP', 'Python'],
                    'Database' => ['MySQL', 'PostgreSQL', 'MongoDB'],
                    'Tools' => ['Git', 'Docker', 'AWS', 'CloudFlare']
                ],
                'process' => [
                    'Discovery & Analysis' => 'Analisis kebutuhan dan riset kompetitor',
                    'Design & Wireframe' => 'Pembuatan design dan struktur website',
                    'Development' => 'Coding dan implementasi fitur',
                    'Testing & Optimization' => 'Testing menyeluruh dan optimasi performa',
                    'Launch & Support' => 'Go-live dan dukungan maintenance'
                ],
                'color' => 'from-blue-500 to-blue-700'
            ],
            'ecommerce-platform' => [
                'title' => 'E-Commerce Platform',
                'subtitle' => 'Toko Online Lengkap & Terintegrasi',
                'description' => 'Platform e-commerce yang powerful dengan sistem pembayaran terintegrasi, manajemen inventory, dan analytics untuk meningkatkan penjualan online.',
                'icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z',
                'overview' => 'E-Commerce Platform adalah solusi lengkap untuk bisnis yang ingin menjual produk secara online. Kami membangun toko online yang tidak hanya menarik secara visual, tetapi juga dilengkapi dengan fitur-fitur canggih seperti payment gateway, inventory management, dan customer relationship management.',
                'target_business' => [
                    'Retailer yang ingin ekspansi online',
                    'Distributor & supplier B2B',
                    'Brand yang ingin direct-to-consumer',
                    'Marketplace seller yang ingin platform sendiri'
                ],
                'features' => [
                    'Payment Gateway' => 'Integrasi dengan berbagai metode pembayaran',
                    'Inventory Management' => 'Tracking stok real-time dan otomatis',
                    'Multi-vendor Support' => 'Platform marketplace dengan banyak seller',
                    'Advanced Analytics' => 'Dashboard lengkap untuk monitoring bisnis',
                    'Mobile App Ready' => 'API siap untuk aplikasi mobile',
                    'Marketing Tools' => 'Voucher, diskon, dan program loyalty'
                ],
                'packages' => [
                    [
                        'name' => 'Starter E-Commerce',
                        'price' => 'Rp 8.999.000',
                        'duration' => '4-6 minggu',
                        'features' => [
                            'Unlimited produk',
                            'Payment gateway (2 metode)',
                            'Basic inventory management',
                            'Order management',
                            'Customer dashboard',
                            'Basic reporting'
                        ],
                        'ideal_for' => 'UMKM, Single Brand, Small Retailer'
                    ],
                    [
                        'name' => 'Professional E-Commerce',
                        'price' => 'Rp 15.999.000',
                        'duration' => '6-8 minggu',
                        'features' => [
                            'Multi-category products',
                            'Multiple payment gateways',
                            'Advanced inventory',
                            'Marketing tools',
                            'Customer segmentation',
                            'Advanced analytics',
                            'Mobile responsive'
                        ],
                        'ideal_for' => 'Growing Business, Multi-Brand, Medium Retailer'
                    ],
                    [
                        'name' => 'Enterprise E-Commerce',
                        'price' => 'Mulai Rp 25.000.000',
                        'duration' => '8-12 minggu',
                        'features' => [
                            'Multi-vendor marketplace',
                            'B2B & B2C support',
                            'Advanced integrations',
                            'Custom workflows',
                            'API marketplace',
                            'White-label solution',
                            'Dedicated support'
                        ],
                        'ideal_for' => 'Large Retailer, Marketplace, Enterprise'
                    ]
                ],
                'technologies' => [
                    'E-Commerce' => ['WooCommerce', 'Magento', 'Custom Laravel'],
                    'Payment' => ['Midtrans', 'Xendit', 'DOKU', 'OVO', 'GoPay'],
                    'Logistics' => ['JNE', 'TIKI', 'POS', 'Grab', 'GoSend'],
                    'Analytics' => ['Google Analytics', 'Facebook Pixel', 'Custom Dashboard']
                ],
                'process' => [
                    'Business Analysis' => 'Analisis model bisnis dan requirement',
                    'System Architecture' => 'Desain arsitektur dan database',
                    'UI/UX Design' => 'Design interface yang conversion-focused',
                    'Development & Integration' => 'Development dan integrasi payment/logistics',
                    'Testing & Launch' => 'Testing transaksi dan soft launch'
                ],
                'color' => 'from-green-500 to-green-700'
            ],
            'mobile-application' => [
                'title' => 'Mobile Application',
                'subtitle' => 'Aplikasi Mobile iOS & Android',
                'description' => 'Pengembangan aplikasi mobile native dan cross-platform dengan performance tinggi untuk iOS dan Android.',
                'icon' => 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
                'overview' => 'Mobile Application Development adalah layanan pembuatan aplikasi mobile yang dirancang untuk memberikan pengalaman pengguna terbaik di platform iOS dan Android. Kami menggunakan teknologi cross-platform seperti React Native dan Flutter untuk efisiensi pengembangan tanpa mengorbankan kualitas.',
                'target_business' => [
                    'Startup dengan produk digital',
                    'E-commerce yang butuh mobile presence',
                    'Service provider dengan booking system',
                    'Enterprise dengan internal tools'
                ],
                'features' => [
                    'Cross Platform' => 'Satu kode untuk iOS dan Android',
                    'Native Performance' => 'Performa setara aplikasi native',
                    'Push Notifications' => 'Real-time messaging dan alerts',
                    'Offline Support' => 'Fungsi dasar tetap berjalan offline',
                    'App Store Ready' => 'Siap publish ke App Store dan Play Store',
                    'Backend Integration' => 'Integrasi dengan sistem existing'
                ],
                'packages' => [
                    [
                        'name' => 'Simple Mobile App',
                        'price' => 'Rp 12.999.000',
                        'duration' => '6-8 minggu',
                        'features' => [
                            'Basic functionality',
                            'User authentication',
                            'Simple UI/UX',
                            'Push notifications',
                            'Basic analytics',
                            'App store submission'
                        ],
                        'ideal_for' => 'Portfolio App, Simple Business App'
                    ],
                    [
                        'name' => 'Business Mobile App',
                        'price' => 'Rp 22.999.000',
                        'duration' => '8-12 minggu',
                        'features' => [
                            'Complex functionality',
                            'API integrations',
                            'Advanced UI/UX',
                            'Real-time features',
                            'Payment integration',
                            'Admin dashboard',
                            'Advanced analytics'
                        ],
                        'ideal_for' => 'E-commerce App, Service Booking App'
                    ],
                    [
                        'name' => 'Enterprise Mobile App',
                        'price' => 'Mulai Rp 35.000.000',
                        'duration' => '12-16 minggu',
                        'features' => [
                            'Custom architecture',
                            'Multiple integrations',
                            'Advanced security',
                            'Scalable infrastructure',
                            'Custom backend',
                            'Enterprise features',
                            'Ongoing support'
                        ],
                        'ideal_for' => 'Large Scale App, Enterprise Solution'
                    ]
                ],
                'technologies' => [
                    'Cross Platform' => ['React Native', 'Flutter', 'Ionic'],
                    'Native' => ['Swift (iOS)', 'Kotlin (Android)', 'Java'],
                    'Backend' => ['Node.js', 'Laravel', 'Firebase'],
                    'Database' => ['SQLite', 'Realm', 'PostgreSQL']
                ],
                'process' => [
                    'App Strategy' => 'Analisis target user dan platform strategy',
                    'UX/UI Design' => 'Design interface mobile-first',
                    'Development' => 'Coding dengan best practices mobile',
                    'Testing' => 'Testing di berbagai device dan OS',
                    'Deployment' => 'Submit ke App Store dan Play Store'
                ],
                'color' => 'from-purple-500 to-purple-700'
            ],
            'ui-ux-design' => [
                'title' => 'UI/UX Design',
                'subtitle' => 'Design Interface yang User-Friendly',
                'description' => 'Layanan desain UI/UX yang fokus pada user experience optimal dan interface yang menarik untuk meningkatkan konversi.',
                'icon' => 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z',
                'overview' => 'UI/UX Design adalah proses menciptakan interface yang tidak hanya terlihat menarik, tetapi juga memberikan pengalaman pengguna yang intuitif dan efektif. Kami menggabungkan research, psychology, dan design thinking untuk menciptakan solusi yang benar-benar user-centered.',
                'target_business' => [
                    'Startup yang butuh product design',
                    'Perusahaan yang ingin redesign',
                    'App developer yang butuh design',
                    'Brand yang focus pada user experience'
                ],
                'features' => [
                    'User Research' => 'Riset mendalam tentang target pengguna',
                    'Wireframing' => 'Struktur dan flow aplikasi/website',
                    'Prototyping' => 'Interactive prototype untuk testing',
                    'Visual Design' => 'Design interface yang menarik dan konsisten',
                    'Usability Testing' => 'Testing dengan real users',
                    'Design System' => 'Component library untuk konsistensi'
                ],
                'packages' => [
                    [
                        'name' => 'UI Design Only',
                        'price' => 'Rp 3.999.000',
                        'duration' => '2-3 minggu',
                        'features' => [
                            'Visual design interface',
                            'Design system basic',
                            'Responsive layouts',
                            'Icon & illustration',
                            'Style guide',
                            'Design handoff'
                        ],
                        'ideal_for' => 'Developer yang butuh design, Redesign'
                    ],
                    [
                        'name' => 'Full UX/UI Design',
                        'price' => 'Rp 8.999.000',
                        'duration' => '4-6 minggu',
                        'features' => [
                            'User research',
                            'User journey mapping',
                            'Wireframing',
                            'Interactive prototype',
                            'Visual design',
                            'Usability testing',
                            'Complete design system'
                        ],
                        'ideal_for' => 'New Product, Major Redesign'
                    ],
                    [
                        'name' => 'UX Strategy & Design',
                        'price' => 'Mulai Rp 15.000.000',
                        'duration' => '8-12 minggu',
                        'features' => [
                            'UX strategy',
                            'Comprehensive research',
                            'Multiple user testing',
                            'Advanced prototyping',
                            'A/B testing design',
                            'Design workshop',
                            'Ongoing consultation'
                        ],
                        'ideal_for' => 'Enterprise Product, Complex Platform'
                    ]
                ],
                'technologies' => [
                    'Design Tools' => ['Figma', 'Adobe XD', 'Sketch', 'InVision'],
                    'Prototyping' => ['Figma', 'Principle', 'Framer', 'ProtoPie'],
                    'Research' => ['Hotjar', 'Maze', 'UserTesting', 'Google Analytics'],
                    'Handoff' => ['Zeplin', 'Figma Dev Mode', 'Avocode']
                ],
                'process' => [
                    'Research & Discovery' => 'User research dan competitive analysis',
                    'Information Architecture' => 'Struktur informasi dan user flow',
                    'Wireframing' => 'Low-fidelity structure design',
                    'Visual Design' => 'High-fidelity visual interface',
                    'Testing & Iteration' => 'User testing dan refinement'
                ],
                'color' => 'from-pink-500 to-pink-700'
            ],
            'brand-identity' => [
                'title' => 'Brand Identity',
                'subtitle' => 'Identitas Visual yang Memorable',
                'description' => 'Pembuatan identitas visual brand yang kuat, memorable, dan konsisten untuk membangun brand recognition.',
                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'overview' => 'Brand Identity adalah penciptaan identitas visual yang komprehensif untuk brand Anda. Mulai dari logo, color palette, typography, hingga brand guidelines yang akan menjadi foundation untuk semua material komunikasi visual brand Anda.',
                'target_business' => [
                    'Startup yang baru launching',
                    'Perusahaan yang ingin rebranding',
                    'UMKM yang ingin profesional',
                    'Personal brand & influencer'
                ],
                'features' => [
                    'Logo Design' => 'Logo yang memorable dan scalable',
                    'Color Palette' => 'Skema warna yang konsisten',
                    'Typography' => 'Font system yang sesuai brand',
                    'Brand Guidelines' => 'Panduan penggunaan brand',
                    'Stationery Design' => 'Business card, letterhead, dll',
                    'Digital Assets' => 'Social media template, favicon, dll'
                ],
                'packages' => [
                    [
                        'name' => 'Logo Design',
                        'price' => 'Rp 1.999.000',
                        'duration' => '1-2 minggu',
                        'features' => [
                            '3 konsep logo',
                            '2 kali revisi',
                            'File vector (AI, EPS)',
                            'File PNG/JPG',
                            'Basic brand colors',
                            'Logo usage guide'
                        ],
                        'ideal_for' => 'UMKM, Personal Brand, Simple Business'
                    ],
                    [
                        'name' => 'Complete Brand Identity',
                        'price' => 'Rp 4.999.000',
                        'duration' => '3-4 minggu',
                        'features' => [
                            'Logo design complete',
                            'Color palette',
                            'Typography system',
                            'Brand guidelines',
                            'Business stationery',
                            'Social media assets',
                            'Brand mockups'
                        ],
                        'ideal_for' => 'Growing Business, Professional Service'
                    ],
                    [
                        'name' => 'Brand Strategy & Identity',
                        'price' => 'Mulai Rp 8.999.000',
                        'duration' => '6-8 minggu',
                        'features' => [
                            'Brand strategy workshop',
                            'Competitor analysis',
                            'Complete visual identity',
                            'Comprehensive guidelines',
                            'Marketing materials',
                            'Brand implementation',
                            'Brand consultation'
                        ],
                        'ideal_for' => 'Enterprise, Rebranding, Premium Brand'
                    ]
                ],
                'technologies' => [
                    'Design Software' => ['Adobe Illustrator', 'Adobe Photoshop', 'CorelDRAW'],
                    'Typography' => ['Google Fonts', 'Adobe Fonts', 'Custom Typography'],
                    'Mockup Tools' => ['Adobe Dimension', 'Figma', 'Photoshop'],
                    'File Formats' => ['AI', 'EPS', 'SVG', 'PNG', 'JPG', 'PDF']
                ],
                'process' => [
                    'Brand Discovery' => 'Understanding brand values dan target audience',
                    'Research & Analysis' => 'Market research dan competitor analysis',
                    'Concept Development' => 'Brainstorming dan concept creation',
                    'Design Execution' => 'Logo design dan visual identity creation',
                    'Guidelines Creation' => 'Brand guidelines dan implementation guide'
                ],
                'color' => 'from-yellow-500 to-orange-500'
            ],
            'digital-marketing' => [
                'title' => 'Digital Marketing',
                'subtitle' => 'Strategi Pemasaran Digital Terpadu',
                'description' => 'Layanan digital marketing komprehensif untuk meningkatkan brand awareness, engagement, dan konversi melalui berbagai channel digital.',
                'icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6',
                'overview' => 'Digital Marketing adalah strategi pemasaran terpadu yang menggabungkan berbagai channel digital untuk mencapai target bisnis Anda. Dari social media marketing, Google Ads, content marketing, hingga email marketing - semua dirancang untuk memberikan ROI yang optimal.',
                'target_business' => [
                    'UMKM yang ingin online presence',
                    'Brand yang ingin increase awareness',
                    'E-commerce yang butuh traffic',
                    'Service provider yang cari leads'
                ],
                'features' => [
                    'Social Media Marketing' => 'Content strategy dan management sosmed',
                    'Google Ads' => 'Search dan display advertising',
                    'SEO' => 'Organic search optimization',
                    'Content Marketing' => 'Blog, video, dan content creation',
                    'Email Marketing' => 'Newsletter dan automation campaign',
                    'Analytics & Reporting' => 'Performance tracking dan insights'
                ],
                'packages' => [
                    [
                        'name' => 'Social Media Management',
                        'price' => 'Rp 2.999.000/bulan',
                        'duration' => 'Monthly',
                        'features' => [
                            '3 platform sosmed',
                            '12 konten/bulan',
                            'Content planning',
                            'Community management',
                            'Basic analytics',
                            'Monthly report'
                        ],
                        'ideal_for' => 'UMKM, Personal Brand, Local Business'
                    ],
                    [
                        'name' => 'Digital Marketing Suite',
                        'price' => 'Rp 6.999.000/bulan',
                        'duration' => 'Monthly',
                        'features' => [
                            'Social media management',
                            'Google Ads management',
                            'SEO optimization',
                            'Content creation',
                            'Email marketing',
                            'Advanced analytics',
                            'Weekly reporting'
                        ],
                        'ideal_for' => 'Growing Business, E-commerce, Service Provider'
                    ],
                    [
                        'name' => 'Growth Marketing',
                        'price' => 'Mulai Rp 12.000.000/bulan',
                        'duration' => 'Monthly',
                        'features' => [
                            'Full digital strategy',
                            'Multi-channel campaigns',
                            'Advanced automation',
                            'A/B testing',
                            'Conversion optimization',
                            'Dedicated strategist',
                            'Real-time reporting'
                        ],
                        'ideal_for' => 'Enterprise, High-Growth Startup, Premium Brand'
                    ]
                ],
                'technologies' => [
                    'Advertising' => ['Google Ads', 'Facebook Ads', 'Instagram Ads', 'TikTok Ads'],
                    'Analytics' => ['Google Analytics', 'Facebook Pixel', 'Hotjar', 'SEMrush'],
                    'Email Marketing' => ['Mailchimp', 'ConvertKit', 'ActiveCampaign'],
                    'Social Media' => ['Hootsuite', 'Buffer', 'Later', 'Sprout Social']
                ],
                'process' => [
                    'Strategy Development' => 'Digital marketing strategy dan goal setting',
                    'Channel Selection' => 'Pemilihan channel yang tepat untuk target audience',
                    'Campaign Creation' => 'Content creation dan campaign setup',
                    'Execution & Monitoring' => 'Campaign launch dan real-time monitoring',
                    'Optimization & Reporting' => 'Performance analysis dan optimization'
                ],
                'color' => 'from-red-500 to-red-700'
            ]
        ];

        // Check if service exists
        if (!array_key_exists($slug, $services)) {
            abort(404);
        }

        $service = $services[$slug];
        $stats = $this->settingService->getStats();
        $contactSettings = $this->settingService->getMultiple([
            'contact_email',
            'contact_phone'
        ]);

        return view('pages.service-detail', compact('service', 'stats', 'contactSettings'));
    }
}

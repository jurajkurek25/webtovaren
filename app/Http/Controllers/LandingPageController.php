<?php

namespace App\Http\Controllers;

use App\Models\PricingPlan;
use App\Models\Service;

class LandingPageController extends Controller
{
    public function index()
    {
        $services = Service::active()->orderBy('sort_order')->get();
        $coreServices = $services->where('is_addon', false);
        $addons = $services->where('is_addon', true);
        $plans = PricingPlan::active()->with('features')->orderBy('sort_order')->get();

        $problems = [
            [
                'icon' => "\u{1F4B8}",
                'title' => 'Vysoké náklady',
                'description' => '€300-700/mes za 25 ľudí. Platíte za každú službu zvlášť: e-mail, cloud, dizajn nástroje, newsletter, booking, video calls. Rozpočet malého tímu mizne na softvér.',
            ],
            [
                'icon' => "\u{1F500}",
                'title' => 'Nekonečné prepínanie',
                'description' => 'Gmail → Drive → Docs → Meet → Calendar → Canva → Buffer → Mailchimp. Strácate 2+ hodiny týždenne prepínaním medzi 10+ aplikáciami. Znižuje to produktivitu.',
            ],
            [
                'icon' => "\u{1F3AF}",
                'title' => 'Overkill funkcie',
                'description' => 'Potrebujete 20% funkcií, ale platíte za 100%. SharePoint, Power Platform, Advanced Threat Protection – skvelé pre enterprise, zbytočné pre 10-členný tím.',
            ],
            [
                'icon' => "\u{1F512}",
                'title' => 'Dáta v USA',
                'description' => 'Google a Microsoft ukladajú vaše dáta na US serveroch. GDPR concerns, CLOUD Act riziko, žiadna reálna kontrola nad citlivými informáciami organizácie.',
            ],
            [
                'icon' => "\u{1F4DE}",
                'title' => 'Nulová lokálna podpora',
                'description' => 'Call centrá v Indii. Komunikácia v angličtine. Odpovede zo šablón. Nikto nerozumie špecifikám slovenských organizácií a ich potrebám.',
            ],
            [
                'icon' => "\u{1F517}",
                'title' => 'Vendor lock-in',
                'description' => 'Raz vojdete do ekosystému, ťažko odídete. Proprietárne formáty, integrácie len v rámci systému, migrácia by stála tisíce eur a mesiace práce.',
            ],
        ];

        $solutions = [
            [
                'icon' => "\u{1F3AF}",
                'title' => 'Jedno prihlásenie. Všetko dostupné.',
                'description' => 'Prihlásite sa raz a máte prístup k e-mailu, dokumentom, dizajn nástrojom, video callom – všetkému. Žiadne prepínanie, žiadne hesla navyše.',
            ],
            [
                'icon' => "\u{1F4B0}",
                'title' => '85% úspora oproti konkurencii',
                'description' => '€99/mes za 25 ľudí vs €656/mes u konkurencie. Ušetríte €6,684 ročne – to sú peniaze na projekty, nie na softvér.',
            ],
            [
                'icon' => "\u{1F1EA}\u{1F1FA}",
                'title' => 'Vaše dáta v Európe. Plná kontrola.',
                'description' => 'Servery v Nemecku (Hetzner), GDPR compliant, žiadny US CLOUD Act. Vlastníte svoje dáta, nie korporácia.',
            ],
            [
                'icon' => "\u{1F1F8}\u{1F1F0}",
                'title' => 'Podpora v slovenčine. Reálni ľudia.',
                'description' => 'Nie call centrum. Rozumieme slovenským organizáciám, účtovníctvu, potrebám neziskoviek. Odpoveď do 24h.',
            ],
            [
                'icon' => "\u{1F513}",
                'title' => 'Open source. Žiadny vendor lock-in.',
                'description' => 'Postavené na open source nástrojoch. Môžete kedykoľvek migrovať, exportovať všetky dáta. Žiadne proprietárne formáty.',
            ],
        ];

        $comparisons = [
            ['feature' => 'E-mail & Calendar', 'google' => true, 'microsoft' => true, 'webtovaren' => true],
            ['feature' => 'Docs, Sheets, Slides', 'google' => true, 'microsoft' => true, 'webtovaren' => true],
            ['feature' => 'Cloud Storage', 'google' => true, 'microsoft' => true, 'webtovaren' => true],
            ['feature' => 'Video Calls', 'google' => true, 'microsoft' => true, 'webtovaren' => true],
            ['feature' => 'Team Chat', 'google' => true, 'microsoft' => true, 'webtovaren' => true],
            ['feature' => 'Design Tool (Canva-like)', 'google' => false, 'microsoft' => false, 'webtovaren' => true],
            ['feature' => 'Brand Templates', 'google' => false, 'microsoft' => false, 'webtovaren' => true],
            ['feature' => 'Newsletter Marketing', 'google' => false, 'microsoft' => false, 'webtovaren' => true],
            ['feature' => 'Social Media Scheduling', 'google' => false, 'microsoft' => false, 'webtovaren' => true],
            ['feature' => 'Booking System', 'google' => false, 'microsoft' => true, 'webtovaren' => true],
            ['feature' => 'Webstránka', 'google' => 'Basic', 'microsoft' => 'SharePoint', 'webtovaren' => 'Pro'],
            ['feature' => 'E-commerce', 'google' => false, 'microsoft' => false, 'webtovaren' => true],
            ['feature' => 'Online kurzy (LMS)', 'google' => false, 'microsoft' => false, 'webtovaren' => true],
            ['feature' => 'Community Platform', 'google' => false, 'microsoft' => false, 'webtovaren' => true],
            ['feature' => 'Dáta v EU', 'google' => 'Opt-in', 'microsoft' => 'Opt-in', 'webtovaren' => 'Default'],
            ['feature' => 'SK podpora', 'google' => false, 'microsoft' => false, 'webtovaren' => true],
        ];

        $pricingComparison = [
            ['label' => 'Cena (25 users)', 'google' => '€287/mes', 'microsoft' => '€312/mes', 'webtovaren' => '€99/mes'],
            ['label' => '+ Extra služby', 'google' => '€369/mes', 'microsoft' => '€344/mes', 'webtovaren' => '€0/mes'],
            ['label' => 'TOTAL', 'google' => '€656/mes', 'microsoft' => '€656/mes', 'webtovaren' => '€99/mes'],
        ];

        return view('landing.index', compact(
            'services',
            'coreServices',
            'addons',
            'plans',
            'problems',
            'solutions',
            'comparisons',
            'pricingComparison',
        ));
    }
}

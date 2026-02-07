<?php

namespace Database\Seeders;

use App\Models\PlanFeature;
use App\Models\PricingPlan;
use Illuminate\Database\Seeder;

class PricingPlanSeeder extends Seeder
{
    public function run(): void
    {
        $starter = PricingPlan::create([
            'name' => 'Starter',
            'slug' => 'starter',
            'price' => 49,
            'team_size' => 'Pre 5-10 členov tímu',
            'sort_order' => 1,
        ]);

        $starterFeatures = [
            '10 e-mailových schránok',
            '100GB cloudové úložisko',
            'Docs, Sheets, Slides',
            'Video calls do 15 účastníkov',
            'Calendar & Booking',
            'Notes & Tasks',
            'Webstránka + Blog',
            'Newsletter (500 kontaktov)',
            'Forms (basic)',
            'Technická podpora',
        ];

        foreach ($starterFeatures as $i => $feature) {
            PlanFeature::create([
                'pricing_plan_id' => $starter->id,
                'feature' => $feature,
                'sort_order' => $i,
            ]);
        }

        $professional = PricingPlan::create([
            'name' => 'Professional',
            'slug' => 'professional',
            'price' => 99,
            'team_size' => 'Pre 15-30 členov tímu',
            'is_popular' => true,
            'sort_order' => 2,
        ]);

        $proFeatures = [
            ['feature' => 'Všetko zo Starter +', 'is_inherited' => true],
            ['feature' => '30 e-mailových schránok', 'is_inherited' => false],
            ['feature' => '500GB cloudové úložisko', 'is_inherited' => false],
            ['feature' => 'Team Chat (Mattermost)', 'is_inherited' => false],
            ['feature' => 'Video calls do 50 účastníkov', 'is_inherited' => false],
            ['feature' => 'Canvas Design Studio', 'is_inherited' => false],
            ['feature' => 'Newsletter (2000 kontaktov)', 'is_inherited' => false],
            ['feature' => 'Advanced Forms & Surveys', 'is_inherited' => false],
            ['feature' => 'Social Media Scheduling', 'is_inherited' => false],
            ['feature' => 'Analytics & Stats', 'is_inherited' => false],
            ['feature' => 'Password Manager', 'is_inherited' => false],
            ['feature' => 'E-commerce basic', 'is_inherited' => false],
            ['feature' => 'Priority podpora', 'is_inherited' => false],
        ];

        foreach ($proFeatures as $i => $feature) {
            PlanFeature::create([
                'pricing_plan_id' => $professional->id,
                'feature' => $feature['feature'],
                'is_inherited' => $feature['is_inherited'],
                'sort_order' => $i,
            ]);
        }

        $enterprise = PricingPlan::create([
            'name' => 'Enterprise',
            'slug' => 'enterprise',
            'price' => 299,
            'team_size' => 'Pre 50-100+ členov',
            'sort_order' => 3,
        ]);

        $enterpriseFeatures = [
            ['feature' => 'Všetko z Professional +', 'is_inherited' => true],
            ['feature' => 'Unlimited e-maily', 'is_inherited' => false],
            ['feature' => '2TB+ cloudové úložisko', 'is_inherited' => false],
            ['feature' => 'Video calls 100+ účastníkov', 'is_inherited' => false],
            ['feature' => 'Webinars & Live streaming', 'is_inherited' => false],
            ['feature' => 'Community platform', 'is_inherited' => false],
            ['feature' => 'Online kurzy (Education)', 'is_inherited' => false],
            ['feature' => 'Video hosting platform', 'is_inherited' => false],
            ['feature' => 'Advanced e-commerce', 'is_inherited' => false],
            ['feature' => 'Billing & Invoicing (Stripe)', 'is_inherited' => false],
            ['feature' => 'Automation workflows', 'is_inherited' => false],
            ['feature' => 'Custom AI chatbots', 'is_inherited' => false],
            ['feature' => 'Dedicated support + SLA', 'is_inherited' => false],
            ['feature' => 'Quarterly strategy calls', 'is_inherited' => false],
        ];

        foreach ($enterpriseFeatures as $i => $feature) {
            PlanFeature::create([
                'pricing_plan_id' => $enterprise->id,
                'feature' => $feature['feature'],
                'is_inherited' => $feature['is_inherited'],
                'sort_order' => $i,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Network;
use App\Models\Package;
use App\Models\PackageTag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'Virgile',
            'last_name' => 'Agbowagli',
            'email' => 'virgile@gmail.com',
            'password' => '123',
            'phone' => '0123456789',
        ]);


        Agent::create([
            'first_name' => 'Virgile',
            'last_name' => 'Agbowagli',
            'email' => 'virgile@gmail.com',
            'password' => '123',

            'phone_number' => '22990000000',
            'whatsapp_number' => '22990000000',
            'birth_date' => '1998-05-12',
            'gender' => 'male',
            'region' => 'Littoral',
            'city' => 'Cotonou',
            'address' => 'Zongo Street',
            'id_type' => 'National ID',
            'id_number' => 'ID12345678',

            'mobile_money_network' => 'MTN',
            'mobile_money_number' => '22990000000',
            'reason' => 'Interested in sales opportunities',

            'have_sale_experience' => true,
            'way_of_hearing_us' => 'website'
        ]);


        $networks = [
            [
                'name' => 'MTN',
                'code' => 'mtn',
                'primary_color' => '#FFCC00',
                'secondary_color' => '#FFA500',
                'short_description' => 'Mobile Telecommunications Network',
                'description' => 'Ghana\'s leading mobile network operator',
                'sort_order' => 1,
            ],

            [
                'name' => 'Airtel Tigo',
                'code' => 'airteltigo',
                'primary_color' => '#FF0000',
                'secondary_color' => '#DC143C',
                'short_description' => 'Merged Network Provider',
                'description' => 'Combined Airtel and Tigo network services',
                'sort_order' => 2,
            ],

            [
                'name' => 'Telecom',
                'code' => 'telecel',
                'primary_color' => '#00A650',
                'secondary_color' => '#008040',
                'short_description' => 'Formerly Vodafone Ghana',
                'description' => 'Rebranded Vodafone network in Ghana',
                'sort_order' => 3,
            ],
        ];

        foreach ($networks as $network) {
            Network::create($network);
        }

        $tags = [
            [
                'name' => 'Popular',
                'slug' => 'popular',
                'color' => '#FF6B6B',
                'icon' => 'star',
                'description' => 'Most purchased packages',
                'sort_order' => 1
            ],
            [
                'name' => 'Best',
                'slug' => 'best',
                'color' => '#4ECDC4',
                'icon' => 'lightning-charge-fill',
                'description' => 'Great price for data amount',
                'sort_order' => 2
            ],
            [
                'name' => 'New',
                'slug' => 'new',
                'color' => '#95E1D3',
                'icon' => 'stars',
                'description' => 'Recently added packages',
                'sort_order' => 3
            ],
            [
                'name' => 'Hot Deal',
                'slug' => 'hot-deal',
                'color' => '#F38181',
                'icon' => 'fire',
                'description' => 'Limited time offers',
                'sort_order' => 4
            ],
            [
                'name' => 'Unlimited',
                'slug' => 'unlimited',
                'color' => '#AA96DA',
                'icon' => 'infinity',
                'description' => 'Unlimited data packages',
                'sort_order' => 5
            ],
            [
                'name' => 'Special',
                'slug' => 'special',
                'color' => '#FCBAD3',
                'icon' => 'calendar-week',
                'description' => 'Weekend only packages',
                'sort_order' => 6
            ]
        ];

        foreach ($tags as $tag) {
            PackageTag::create($tag);
        }


        $network = Network::where('is_active', true)->pluck('id');
        $tag = PackageTag::where('is_active', true)->pluck('id');

        $packages = [
            [
                'network_id' => $network->random(),
                'package_tag_id' => $tag->random(),
                'name' => 'MTN 1GB Daily',
                'data_amount' => '1GB',
                'cost_price' => 4.50,
                'selling_price' => 5.00,
                'agent_price' => 4.80,
                'validity' => '24 Hours',
                'validity_days' => 1,
                'package_code' => 'MTN_1GB_DAILY',
                'is_active' => true,
                'sort_order' => 1
            ],
            [
                'network_id' => $network->random(),
                'package_tag_id' => $tag->random(),
                'name' => '2GB Daily Data',
                'data_amount' => '2GB',
                'cost_price' => 8.50,
                'selling_price' => 9.50,
                'agent_price' => 9.00,
                'validity' => '24 Hours',
                'validity_days' => 1,
                'package_code' => 'DATA_2GB_DAILY',
                'is_active' => true,
                'sort_order' => 2
            ],
            [
                'network_id' => $network->random(),
                'package_tag_id' => $tag->random(),
                'name' => 'MTN 5GB Weekly',
                'data_amount' => '5GB',
                'cost_price' => 18.00,
                'selling_price' => 20.00,
                'agent_price' => 19.00,
                'validity' => '7 Days',
                'validity_days' => 7,
                'package_code' => 'MTN_5GB_WEEKLY',
                'is_active' => true,
                'sort_order' => 3
            ],
            [
                'network_id' => $network->random(),
                'package_tag_id' => $tag->random(),
                'name' => '10GB Weekly Data',
                'data_amount' => '10GB',
                'cost_price' => 34.00,
                'selling_price' => 37.00,
                'agent_price' => 35.50,
                'validity' => '7 Days',
                'validity_days' => 7,
                'package_code' => 'DATA_10GB_WEEKLY',
                'is_active' => true,
                'sort_order' => 4
            ],
            [
                'network_id' => $network->random(),
                'package_tag_id' => $tag->random(),
                'name' => '20GB Monthly Data',
                'data_amount' => '20GB',
                'cost_price' => 65.00,
                'selling_price' => 70.00,
                'agent_price' => 68.00,
                'validity' => '30 Days',
                'validity_days' => 30,
                'package_code' => 'DATA_20GB_MONTHLY',
                'is_active' => true,
                'sort_order' => 5
            ],
            [
                'network_id' => $network->random(),
                'package_tag_id' => $tag->random(),
                'name' => '50GB Monthly Data',
                'data_amount' => '50GB',
                'cost_price' => 150.00,
                'selling_price' => 160.00,
                'agent_price' => 155.00,
                'validity' => '30 Days',
                'validity_days' => 30,
                'package_code' => 'DATA_50GB_MONTHLY',
                'is_active' => true,
                'sort_order' => 6
            ],
        ];


        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}

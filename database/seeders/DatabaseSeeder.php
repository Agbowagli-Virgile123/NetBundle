<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\Network;
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

    }
}

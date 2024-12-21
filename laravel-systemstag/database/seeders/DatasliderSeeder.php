<?php

namespace Database\Seeders;

use App\Models\Dataslider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatasliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('datasliders')->insert([
            [
                'company_name' => 'Tracking Maps',
                'logo_url' => 'logo 2 for stweb.png',
            ],
            [
                'company_name' => 'Systems Tag',
                'logo_url' => '512 Final logo copy for stweb.png',
            ],
            [
                'company_name' => 'Tracking Maps',
                'logo_url' => 'logo 2 for stweb.png',
            ],
            [
                'company_name' => 'Systems Tag',
                'logo_url' => '512 Final logo copy for stweb.png',
            ],
            [
                'company_name' => 'Tracking Maps',
                'logo_url' => 'logo 2 for stweb.png',
            ],
            [
                'company_name' => 'Systems Tag',
                'logo_url' => '512 Final logo copy for stweb.png',
            ],
            [
                'company_name' => 'Tracking Maps',
                'logo_url' => 'logo 2 for stweb.png',
            ],
            [
                'company_name' => 'Systems Tag',
                'logo_url' => '512 Final logo copy for stweb.png',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Voter::factory(10)->create();

        \App\Models\Voter::factory()->create([
            'name' => 'Husnul Putri Candra Buana',
            'email' => 'Husnulpcb@example.com',
            'address' => 'Mastrip 4'
        ]);
    }
}

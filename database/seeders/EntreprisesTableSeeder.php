<?php

namespace Database\Seeders;

use App\Models\Entreprise;
use App\Models\Role;
use Illuminate\Database\Seeder;

class EntreprisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Entreprise::truncate();
        
        Entreprise::create(['name' => 'Entreprise']);
    }
}

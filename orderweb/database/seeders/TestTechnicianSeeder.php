<?php

namespace Database\Seeders;

use App\Models\Technician;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Technician = new Technician();
        $Technician->document = 989898;
        $Technician->name = 'Arnulfo Archundia';
        $Technician->especiality = 'medicion de redes';
        $Technician->phone = '315312';
        $Technician->save();
    }
}

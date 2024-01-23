<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Technician;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $this->call(RoleSeeder::class);
      $this->call(CausalSeeder::class);
      $this->call(ObservationSeeder::class);
      $this->call(TypeActivitySeeder::class);
      //se crea un usuario con rol de administrador
      User::factory()->create([
        'role_id' => 1
      ]);

      //se crea varios usuarios con rol supervisor
      User::factory()->create([
        'role_id' => 2
      ]);
      
      Technician::factory()->create([
        'especiality' => 'instalacion de redes'
      ]);

      Technician::factory(2)->create([
        'especiality' => 'construccion'
      ]);

      Technician::factory(2)->create([
        'especiality' => 'Lectura de redes'
      ]);

      //tecnico sin especialidad

      Technician::factory(2)->create();
 

    }
}

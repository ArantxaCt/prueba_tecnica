<?php

namespace Database\Seeders;

use App\Models\Habitaciones;
use Illuminate\Database\Seeder;

class HabitacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Habitaciones::firstOrCreate(['nombre'=>'Sencilla', 'descripcion' => 'Habitación desde una a dos personas', 
                                    'cantidad' => '1', 'precio' => '1500', 
                                    'codigo' => 'Q', 'es_activo' => true, 
                                    'host_id' => 1, 'tipo_habitacion_id' => 1]);
        Habitaciones::firstOrCreate(['nombre'=>'Doble', 'descripcion' => 'Habitación desde una a 4 personas', 
                                    'cantidad' => '1', 'precio' => '3000', 
                                    'codigo' => 'QQ', 'es_activo' => true, 
                                    'host_id' => 1, 'tipo_habitacion_id' => 2]);
    }
}
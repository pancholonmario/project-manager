<?php

use App\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**voy hacer uno solo para ciudades que yo quiera poner:

       $ciudades = array("Quito","Guayaquil","Ibarra", "Loja", "Machala", "Ambato", "Esmeraldas", "Tena", "Portoviejo", "Cuenca", "Santa Elena", "Santo Domingo", "Manta");
        
       foreach($ciudades as $city)
       {
           City::create([
              'nombre' => $city
        ]

        );
        }
        */

        //Si deseo crear 30 registros de cualquier tipo de dato coloco:
         factory(App\City::class, 80)->create();
        
    }
}

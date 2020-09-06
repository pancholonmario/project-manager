<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /**voy hacer uno solo para compañias

         $companias = array("Fybeca","Mazda","Megamaxi", "La Favorita", "Coca Cola", "Platzi", "Bioderm", "Apple", "Microsoft Windows", "Amazon", "Google", "Latam", "WallMart");
        
         foreach($companias as $company)
         {
             Company::create([
                 'name' => $company
             ]
 
             );
         }
         */

         factory(App\Company::class, 20)->create();
    }
}

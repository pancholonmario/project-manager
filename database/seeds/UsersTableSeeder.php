<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Si deseo crear 13 registros de cualquier tipo de dato coloco: 
       factory(App\User::class, 13)->create();
    }
}

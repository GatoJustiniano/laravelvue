<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::truncate();

        for ($i=1; $i < 20; $i++) { 
            Contact::create([
                'name'          => "Pepe $i ",
                'surname'       => "Perez $i",
                'email'         => 'andres_prueba@gmail.com',
                'message'       => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur neque ut neque mattis aliquam. Sed sed nibh neque. Duis scelerisque dapibus ligula, vel pulvinar sapien ultrices vitae. Etiam fringilla porta elementum. Nam tempus accumsan tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque lobortis tempus erat, at condimentum neque convallis eget. Donec dapibus, elit quis varius sagittis, lorem ipsum auctor urna, eu efficitur. "                
            ]);
        }
    }
}

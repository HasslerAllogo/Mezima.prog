<?php

namespace Database\Seeders;

use \App\Models\ProjetMezima;
use App\Models\TacheMezima;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ProjetMezima::factory(10)->create();
        // TacheMezima::factory(10)->create();
        for($i=0;$i<1;$i++){
            // \App\Models\User::factory(10)->create();

    //        $projet = ProjetMezima::factory()->create();
   
    //        $taches = TacheMezima::factory()->create()
    //            ->count(3)
    //            ->for($projet)
    //            ->create();
        ProjetMezima::factory()
        ->has(TacheMezima::factory()->count(4))
        ->count(10)
        ->create();
        }
    }
}

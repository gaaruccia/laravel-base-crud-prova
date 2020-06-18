<?php

use Illuminate\Database\Seeder;
use App\Cagnolino_model;
class CagnolinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cagnolino_model::class,20)->create();
    }
}

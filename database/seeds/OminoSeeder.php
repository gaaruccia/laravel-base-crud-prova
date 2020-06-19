<?php

use Illuminate\Database\Seeder;
use App\Omino_model;
class OminoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Omino_model::class,50)->create();
    }
}

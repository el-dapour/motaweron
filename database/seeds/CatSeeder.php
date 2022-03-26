<?php

use App\Cat;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cat::create([
            'name'=>'android',
        ]);
        Cat::create([
            'name'=>'apple',
        ]);
        Cat::create([
            'name'=>'mac',
        ]);
        Cat::create([
            'name'=>'windows',
        ]);
        Cat::create([
            'name'=>'linux',
        ]);
    }
}

<?php

use App\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'name' => 'lol',
            'img' => '1.png',
        ]);
        Portfolio::create([
            'name' => 'lol',
            'img' => '2.png',
        ]);
        Portfolio::create([
            'name' => 'lol',
            'img' => '3.png',
        ]);
        Portfolio::create([
            'name' => 'lol',
            'img' => '4.png',
        ]);
    }
}

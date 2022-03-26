<?php

use App\Serve;
use Illuminate\Database\Seeder;

class ServeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ANDROID
        Serve::create([
            'name' => 'samsung',
            'title' => 'samsung',
            'desc' => 'this is a phone in our country bla bla bla',
            'bg_img' => '1.png',
            'img' => '2.png',
            'cat_id' => '1',
        ]);

        Serve::create([
            'name' => 'iphone',
            'title' => 'iphone',
            'desc' => 'this is a phone in our country bla bla bla',
            'bg_img' => '1.png',
            'img' => '2.png',
            'cat_id' => '2',
        ]);

        Serve::create([
            'name' => 'mac',
            'title' => 'mac',
            'desc' => 'this is a phone in our country bla bla bla',
            'bg_img' => '1.png',
            'img' => '2.png',
            'cat_id' => '3',
        ]);

        Serve::create([
            'name' => 'windows 10',
            'title' => 'windows 10',
            'desc' => 'this is a phone in our country bla bla bla',
            'bg_img' => '1.png',
            'img' => '2.png',
            'cat_id' => '4',
        ]);

        Serve::create([
            'name' => 'linux 6',
            'title' => 'linux 6',
            'desc' => 'this is a phone in our country bla bla bla',
            'bg_img' => '1.png',
            'img' => '2.png',
            'cat_id' => '5',
        ]);
    }
}

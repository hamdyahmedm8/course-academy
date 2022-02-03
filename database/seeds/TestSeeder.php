<?php

use Illuminate\Database\Seeder;
use App\Test;
class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::create([
            'name'=>'kareem',
            'desc'=>'web development',
            'img'=>'1.png'
        ]);
        Test::create([
            'name'=>'ahmed',
            'desc'=>'web development',
            'img'=>'2.png'
        ]);
        Test::create([
            'name'=>'aya',
            'desc'=>'web development',
            'img'=>'3.png'
        ]);
        
    }
}

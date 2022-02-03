<?php

use Illuminate\Database\Seeder;
use App\Trainer;
class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name'=>'kareem',
            'spec'=>'web development',
            'img'=>'1.png'
        ]);
        Trainer::create([
            'name'=>'ahmed moaty',
            'spec'=>'dentist',
            'img'=>'2.png'
        ]);
        Trainer::create([
            'name'=>'aya',
            'spec'=>'doctor',
            'img'=>'3.png'
        ]);
        Trainer::create([
            'name'=>'tarik',
            'spec'=>'englih teacher',
            'img'=>'4.png'
        ]);
        Trainer::create([
            'name'=>'nor',
            'spec'=>'back end',
            'img'=>'5.png'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1 ; $i<=3 ; $i++)
        {
            for($j=1; $j<=8 ; $j++)
            {
                Course::create([
                    'cat_id' => $i,
                    'trainer_id' => rand(1,5),
                    'name' => "course num $j cat num $i",
                    'small_desc'=>'first Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                    'desc' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                    'price' => rand(1000,6000),
                    'img' => "$j.png",
                ]);
            }
        }
        
    }
}

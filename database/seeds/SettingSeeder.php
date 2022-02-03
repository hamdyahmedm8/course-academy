<?php

use Illuminate\Database\Seeder;
use App\Setting;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name'=>'kareem',
            'logo'=>'1.jpg',
            'favicon'=>'teacher',
            'city'=>'alex',
            'address'=>'moharem bek',
            'phone'=>'01233340403',
            'work_hours'=>'9',
            'email'=>'kareem@gmail',
            'map'=>'bbbbbb',
            'fb'=>'kareem@facebook.com',
            'twitter'=>'kareem@twitter.com',
            'insta'=>'kareem@insta.com'
        ]);
    }
}

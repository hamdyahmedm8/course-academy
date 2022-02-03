<?php

use Illuminate\Database\Seeder;
use App\SiteContent;
class SiteContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SiteContent::create([
        //     'name'=>'banner',
        //     'content'=>json_encode([
        //         'title'=>'every student yearns to learn',
        //         'subtitle'=>'making your childes world better',
        //         'desc'=>"replenish seasons may male hath fruit beast were seas saw  you arrie man beast whales his void unto last session for bite."
        //     ]),
        // ]);
        // SiteContent::create([
        //     'name'=>'features',
        //     'content'=>json_encode([
        //         'mainTitle'=>'main Feature',
        //         'mainDesc'=>'Set have great you male grass yielding an yielding first their youre have called the abundantly fruit were man',
        //         'feature1Title'=>' Future one',
        //         'feature1Desc'=>'Set have great you male grasses yielding yielding first their to called deep abundantly Set have great you male',
        //         'feature2Title'=>'Future tow',
        //         'feature2Desc'=>'Set have great you male grasses yielding yielding secound their to called deep abundantly Set have great you male',
        //         'feature3Title'=>'Future three',
        //         'feature3Desc'=>'Set have great you male grasses yielding yielding third their to called deep abundantly Set have great you male',

        //     ]),
        // ]);
            SiteContent::create([
            'name'=>'courses',
            'content'=>json_encode([
                'title'=>'popular courses',
                'subtitle'=>'Special Courses',
            ]),
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
            'name' => 'Gifts For Men',
            'classes' => 'fas fa-mars',
            'color'=>'#d06503',
        ],
        [
            'name' => 'Gifts For Women',
            'classes' => 'fas fa-venus',
            'color'=>'#e9931a',
        ],[
            'name' => 'Geeky Stuff',
            'classes' => 'fas fa-tv',
            'color'=>'#1691be',
        ],[
            'name' => 'Gifts Under $20',
            'classes' => 'fas fa-dollar-sign',
            'color'=>'#d06503',
        ],[
            'name' => 'Giveaways',
            'classes' => 'fas fa-gift',
            'color'=>'#1b3647',
        ],
        ]);
    }
}

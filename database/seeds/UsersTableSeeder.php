<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789'),
            'admin'=>1,
        ]);
        DB::table('categories')->insert([
            [
                'name' => 'Gifts For Men',
                'classes' => 'fas fa-mars',
                'color' => '#d06503',
            ],
            [
                'name' => 'Gifts For Women',
                'classes' => 'fas fa-venus',
                'color' => '#e9931a',
            ], [
                'name' => 'Geeky Stuff',
                'classes' => 'fas fa-tv',
                'color' => '#1691be',
            ], [
                'name' => 'Gifts Under $20',
                'classes' => 'fas fa-dollar-sign',
                'color' => '#166ba2',
            ], [
                'name' => 'Giveaways',
                'classes' => 'fas fa-gift',
                'color' => '#1b3647',
            ],
        ]);
    }
}

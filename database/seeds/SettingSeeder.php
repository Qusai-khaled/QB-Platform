<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'blog_name' => 'Qusai khaled',
            'phone_number' => '00 962 780316716',
            'blog_email' => 'qusai952198@gmail.com',
            'address' => 'Jordan - zarqa'
        ]);
    }
}

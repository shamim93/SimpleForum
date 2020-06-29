<?php

use App\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'name'  =>'Laravel 6',
            'slug'  =>Str::slug('Laravel 6'),
        ]);
        Channel::create([
            'name'  =>'Vue js 3',
            'slug'  =>Str::slug('Vue js 3'),
        ]);
        Channel::create([
            'name'  =>'Python 3',
            'slug'  =>Str::slug('Python 3'),
        ]);
        
    }
}

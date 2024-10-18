<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        About::updateOrCreate(['id' => '1'] , 
        [
            'title' => 'Travel to make memories all around the world.',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum labore sed, veniam nisi sunt laboriosam ducimus, odio aspernatur fugiat minima blanditiis dignissimos.' ,
            'image' => '1727964804-banner3.jpg' ,
             ]
        );}
}

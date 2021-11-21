<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = 
        [
            [
                'pillar' => 'Personal Development',
                'expertise' => 'Quarter Life Crisis Solving',                
            ],
            [
                'pillar' => 'Personal Development',
                'expertise' => 'Public Speaking',                
            ],
            [
                'pillar' => 'Personal Development',
                'expertise' => 'Time Management',                
            ],
            [
                'pillar' => 'Personal Development',
                'expertise' => 'Work-life Balance',                
            ],
            [
                'pillar' => 'Career Literacy',
                'expertise' => 'CV / Resume Review',
            ],
            [
                'pillar' => 'Career Literacy',
                'expertise' => 'Mock Up Interview',
            ],
            [
                'pillar' => 'Career Literacy',
                'expertise' => 'FGD Preparation',
            ],
            [
                'pillar' => 'Career Literacy',
                'expertise' => 'Personal & LinkedIn Branding',
            ],
            [
                'pillar' => 'Career Literacy',
                'expertise' => 'CAREER VALUE: Digital Marketing',
            ],
            [
                'pillar' => 'Career Literacy',
                'expertise' => 'Value for Career (Ikigai)',
            ],
            [
                'pillar' => 'Career Literacy',
                'expertise' => 'G-Suite Management',
            ],
            [
                'pillar' => 'Social Relations',
                'expertise' => 'Social Networking',
            ],
            [
                'pillar' => 'Social Relations',
                'expertise' => 'Scholarship',
            ],
            [
                'pillar' => 'Social Relations',
                'expertise' => 'National Exposure',
            ],
            [
                'pillar' => 'Social Relations',
                'expertise' => 'International Exposure',
            ],
            [
                'pillar' => 'Social Relations',
                'expertise' => 'Conflic Resolutions for Romantic Relations',
            ],
            [
                'pillar' => 'Social Relations',
                'expertise' => 'Conflict Resolutions for Friendship / Parental Relations',
            ],
            [
                'pillar' => 'Financial Literacy',
                'expertise' => 'Time Management',
            ],
            [
                'pillar' => 'Financial Literacy',
                'expertise' => 'Work-Study-Life Balance',
            ],
            [
                'pillar' => 'Financial Literacy',
                'expertise' => 'Financial Planning (Money Management)',
            ],
            [
                'pillar' => 'Financial Literacy',
                'expertise' => 'Investing',
            ],
            [
                'pillar' => 'Financial Literacy',
                'expertise' => 'Business Proposal / Management',
            ],
            [
                'pillar' => 'Financial Literacy',
                'expertise' => 'Business Cases',
            ],


        ];
        
        DB::table('categories')->insert($categories);
    }
}

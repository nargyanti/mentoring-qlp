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
                'description' => 'Untuk kamu yang ingin menyelesaikan isu quarter life crisis yang dialami',
            ],
            [
                'pillar' => 'Personal Development',
                'expertise' => 'Public Speaking',
                'description' => 'Untuk kamu yang ingin belajar berani berbicara di depan umum dan teknik-teknisnya',
            ],
            [
                'pillar' => 'Personal Development',
                'expertise' => 'Time Management',
                'description' => 'Untuk kamu yang ingin belajar mengatur waktu dan belajar manajemen prioritas',
            ],
            [
                'pillar' => 'Personal Development',
                'expertise' => 'Work-life Balance',  
                'description' => 'Untuk kamu yang ingin mencapai wellbeing antara kehidupan dan pekerjaan',              
            ],
            [
                'pillar' => 'Career Preparation',
                'expertise' => 'CV / Resume Review',
                'description' => 'Konsultasikan CV mu dengan mentor pilihan!',
            ],
            [
                'pillar' => 'Career Preparation',
                'expertise' => 'Mock Up Interview',
                'description' => 'Cari tahu bagaimana tips dan trik interview bersama mentor yang sudah berpengalaman!',
            ],
            [
                'pillar' => 'Career Preparation',
                'expertise' => 'FGD Preparation',
                'description' => 'Ingin cari tahu lebih dalam terkait teknis focus group discussion?',
            ],
            [
                'pillar' => 'Career Preparation',
                'expertise' => 'Personal & LinkedIn Branding',
                'description' => 'Untuk kamu yang sedang ingin belajar personal branding',
            ],            
            [
                'pillar' => 'Career Preparation',
                'expertise' => 'Value for Career (Ikigai)',
                'description' => 'Mencari reason for being di dalam hidup melalui pilihan pekerjaan yang sesuai dengan keinginanmu!',
            ],
            [
                'pillar' => 'Career Preparation',
                'expertise' => 'G-Suite Management',
                'description' => 'Belajar lebih dalam lagi tentang operasional Google Docs, Google Sheets, dan Google Slides',
            ],
            [
                'pillar' => 'Profession Insight',
                'expertise' => 'CAREER VALUE: Digital Marketing',
                'description' => 'Konsultasi terkait pengelolaan social media, strategi campaign, advertising dan lain-lain yang terkait digital marketing',
            ],
            [
                'pillar' => 'Social Relations',
                'expertise' => 'Social Networking',
                'description' => 'Belajar cara membangun jejaring pertemanan dan relasional di masa universitasmu',
            ],
            [
                'pillar' => 'Social Relations',
                'expertise' => 'Scholarship',
                'description' => 'Gali insight lebih dalam terkait pengalaman mentor dalam mendapatkan beasiswa',
            ],
            [
                'pillar' => 'Social Relations',
                'expertise' => 'National Exposure',
                'description' => 'Belajar dari pengalaman mentor yang pernah mengikuti program exposure di tingkat nasional',
            ],
            [
                'pillar' => 'Social Relations',
                'expertise' => 'International Exposure',
                'description' => 'Belajar dari pengalaman mentor yang pernah mengikuti program exposure di tingkat internasional',
            ],
            [
                'pillar' => 'Social Relations',
                'expertise' => 'Conflic Resolutions for Romantic Relations',
                'description' => 'Untuk kamu yang sedang berada dalam konflik percintaan',
            ],
            [
                'pillar' => 'Social Relations',
                'expertise' => 'Conflict Resolutions for Friendship / Parental Relations',
                'description' => 'Untuk kamu yang sedang berada dalam konflik dengan keluarga atau teman',
            ],
            [
                'pillar' => 'Financial Literacy',
                'expertise' => 'Investing & Money Management',
                'description' => 'Konsultasi terkait dasar-dasar investasi dan manajemen keuangan yang relateable dengan pengalaman mentor',
            ],
            [
                'pillar' => 'Financial Literacy',
                'expertise' => 'Business Proposal & Cases',
                'description' => 'Konsultasi terkait cara memulai bisnis, membuat business proposal & business cases',
            ],
        ];
        
        DB::table('categories')->insert($categories);
    }
}

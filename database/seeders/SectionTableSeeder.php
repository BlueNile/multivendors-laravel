<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Section;
class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectionrecords=[
            ['id'=>1,'name'=>'electronics','status'=>1],
            ['id'=>2,'name'=>'clothes','status'=>1],
            ['id'=>3,'name'=>'kitchen','status'=>1],
            ['id'=>4,'name'=>'games','status'=>1],
            ['id'=>5,'name'=>'furintures','status'=>1],
        ];
        Section::insert($sectionrecords);
    }
}

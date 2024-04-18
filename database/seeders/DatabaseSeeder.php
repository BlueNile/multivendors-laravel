<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       //  \App\Models\User::factory(10)->create();

       //  \App\Models\User::factory()->create([
         //   'name' => 'waleed',
         //   'email' => 'admin@example.com',
          //  'password'=>'123456'

       //  ]);
        //$this->call(UserTableSeeder::class);
         // $this->call(AdminTableSeeder::class);
         $this->call(SectionTableSeeder::class);
 
    }
}

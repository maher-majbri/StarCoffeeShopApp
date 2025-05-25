<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $faker = Faker::create();
        // foreach (range(1, 5) as $index) {
        //     DB::table('items')->insert([
        //         'name' => $faker->sentence(3),
        //         'description' =>  $faker->paragraph(3),
        //         'price' =>  $faker->randomFloat(2, 5, 10),
        //         'category_id' => 1 ,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        //  }

        // User::factory(10)->create();

       // User::factory()->create([
         //   'name' => 'Test User',
           // 'email' => 'test@example.com',
      //  ]);
    }
}

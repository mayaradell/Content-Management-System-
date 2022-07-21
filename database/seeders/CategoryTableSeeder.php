<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        Category::insert([
            ['name' => 'Science', 'slug' => 'science', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sports', 'slug' => 'sports', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Movies', 'slug' => 'movies', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Music', 'slug' => 'music', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Literature', 'literature' => 'tvs', 'created_at' => $now, 'updated_at' => $now],

        ]);

    }
}

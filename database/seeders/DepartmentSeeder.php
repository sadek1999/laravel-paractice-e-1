<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Str;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Electronic',
                'slug' => Str::slug('Electronic'),
                'metaTitle' => 'Best Electronics',
                'metaDescription' => 'Discover top-quality electronics.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Furniture',
                'slug' => Str::slug('Furniture'),
                'metaTitle' => 'Stylish Furniture',
                'metaDescription' => 'Elegant and modern furniture.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fashion',
                'slug' => Str::slug('Fashion'),
                'metaTitle' => 'Trendy Fashion',
                'metaDescription' => 'Stay stylish with the latest trends.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sports',
                'slug' => Str::slug('Sports'),
                'metaTitle' => 'Sports Gear',
                'metaDescription' => 'Gear up for your next adventure.',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Books',
                'slug' => Str::slug('Books'),
                'metaTitle' => 'World of Books',
                'metaDescription' => 'Explore books from all genres.',
                'active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('departments')->insert($departments);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\Slide;
use App\Models\Contact;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Tạo role
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole  = Role::firstOrCreate(['name' => 'user']);

        // 2. Tạo admin
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
        ]);
        $admin->assignRole($adminRole);

        // 3. Tạo user thường
        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => Hash::make('user123'),
        ]);
        $user->assignRole($userRole);

        // 4. Tạo danh mục sản phẩm
        $categories = Category::factory(5)->create();

        // 5. Sản phẩm
        $categories->each(function ($category) {
            Product::factory(5)->create([
                'category_id' => $category->id,
            ]);
        });

        // 6. Danh mục & bài viết
        $postCategories = PostCategory::factory(3)->create();
        $postCategories->each(function ($cat) {
            Post::factory(4)->create([
                'post_category_id' => $cat->id,
            ]);
        });

        // 7. Slide và liên hệ
        Slide::factory(3)->create();
        Contact::factory(5)->create();
    }
}

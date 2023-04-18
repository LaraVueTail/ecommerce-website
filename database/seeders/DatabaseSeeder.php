<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AboutPageContent;
use App\Models\ContactPageContent;
use App\Models\HomePageContent;
use App\Models\Product;
use App\Models\SiteIdentity;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // ThemeOption::factory(1)->create();
        SiteIdentity::factory(1)->create();
        HomePageContent::factory(1)->create();
        AboutPageContent::factory(1)->create();
        ContactPageContent::factory(1)->create();

        User::factory()->create([
            'email' => 'test@example.com'
        ]);

        User::factory()->create([
            'email' => 'admin@example.com'
        ]);

        // User::factory(5)->create();

        // Cart::factory()->create([
        //     'user_id' => 1
        // ]);

        // Cart::factory(5)->create();

        Product::factory(10)->create();
    }
}

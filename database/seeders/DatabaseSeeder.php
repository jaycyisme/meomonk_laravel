<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\BlogSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\AnimalSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\SupplierSeeder;
use Database\Seeders\AttributeSeeder;
use Database\Seeders\PromotionSeeder;
use Database\Seeders\UserStatusSeeder;
use Database\Seeders\ServiceTypeSeeder;
use Database\Seeders\RankCustomerSeeder;
use Database\Seeders\PaymentMethodSeeder;
use Database\Seeders\ProductStatusSeeder;
use Database\Seeders\ServiceStatusSeeder;
use Database\Seeders\ProductAttributeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserStatusSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RankCustomerSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(BrandSeeder::class);
        $this->call(AnimalSeeder::class);
        $this->call(ProductStatusSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ServiceStatusSeeder::class);
        $this->call(ServiceTypeSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(ProductAttributeSeeder::class);
    }
}

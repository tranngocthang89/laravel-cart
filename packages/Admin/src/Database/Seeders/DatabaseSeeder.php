<?php

namespace Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Category\Database\Seeders\DatabaseSeeder as CategorySeeder;
use Attribute\Database\Seeders\DatabaseSeeder as AttributeSeeder;
use Core\Database\Seeders\DatabaseSeeder as CoreSeeder;
use User\Database\Seeders\DatabaseSeeder as UserSeeder;
use Customer\Database\Seeders\DatabaseSeeder as CustomerSeeder;
use Inventory\Database\Seeders\DatabaseSeeder as InventorySeeder;
use CMS\Database\Seeders\DatabaseSeeder as CMSSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(InventorySeeder::class);
        $this->call(CoreSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(CMSSeeder::class);
    }
}
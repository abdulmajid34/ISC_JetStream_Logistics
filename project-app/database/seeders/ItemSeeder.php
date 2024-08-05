<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            "id" => 1,
            "customer_id" => 1,
            "item_name" => "Laptop",
            "category" => "Elektronik",
            "total" => 10,
            "price_unit" => 15000000.00,
            "date_in" => "2024-07-01",
            "date_out" => null,
            "no_tracking" => "TRK001",
            "status" => "in",
            "created_at" => "2024-07-01T08:00:00Z",
            "updated_at" => "2024-07-01T08:00:00Z"
        ]);
        Item::create([
            "id" => 2,
            "customer_id" => 2,
            "item_name" => "Kursi Kantor",
            "category" => "Furnitur",
            "total" => 5,
            "price_unit" => 500000.00,
            "date_in" => "2024-07-05",
            "date_out" => "2024-07-10",
            "no_tracking" => "TRK002",
            "status" => "out",
            "created_at" => "2024-07-05T10:00:00Z",
            "updated_at" => "2024-07-10T15:00:00Z"
        ]);
        // Item::create([
        //     "id" => 3,
        //     "customer_id" => 3,
        //     "item_name" => "Meja Kantor",
        //     "category" => "Furnitur",
        //     "total" => 3,
        //     "price_unit" => 1000000.00,
        //     "date_in" => "2024-07-08",
        //     "date_out" => null,
        //     "no_tracking" => "TRK003",
        //     "status" => "in",
        //     "created_at" => "2024-07-08T09:00:00Z",
        //     "updated_at" => "2024-07-08T09:00:00Z"
        // ]);
    }
}

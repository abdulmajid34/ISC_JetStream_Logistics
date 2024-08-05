<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Report;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report::create([
            "id" => 1,
            "item_id" => 1,
            "customer_id" => 1,
            "type" => "in",
            "total" => 10,
            "date" => "2024-07-01",
            "description" => "Barang baru tiba dari supplier",
            "created_at" => "2024-07-01T08:00:00Z",
            "updated_at" => "2024-07-01T08:00:00Z"
        ]);
        Report::create([
            "id" => 2,
            "item_id" => 2,
            "customer_id" => 2,
            "type" => "out",
            "total" => 5,
            "date" => "2024-07-10",
            "description" => "Barang dikirim ke customer",
            "created_at" => "2024-07-10T15:00:00Z",
            "updated_at" => "2024-07-10T15:00:00Z"
        ]);
        Report::create([
            "id" => 3,
            "item_id" => 3,
            "customer_id" => 3,
            "type" => "in",
            "total" => 3,
            "date" => "2024-07-08",
            "description" => "Barang baru tiba dari supplier",
            "created_at" => "2024-07-08T09:00:00Z",
            "updated_at" => "2024-07-08T09:00:00Z"
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\CustomerList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerList::create([
            "id" => 1,
            "name" => "John Doe",
            "email" => "john.doe@example.com",
            "phone" => "1234567890",
            "address" => "123 Main St, Anytown, USA",
            "created_at" => "2024-07-01T08:00:00Z",
            "updated_at" => "2024-07-01T08:00:00Z"
        ]);
        CustomerList::create([
            "id" => 2,
            "name" => "Jane Smith",
            "email" => "jane.smith@example.com",
            "phone" => "0987654321",
            "address" => "456 Elm St, Othertown, USA",
            "created_at" => "2024-07-02T09:00:00Z",
            "updated_at" => "2024-07-02T09:00:00Z"
        ]);
        // CustomerList::create([
        //     "id" => 3,
        //     "name" => "dolor ipsum",
        //     "email" => "dolorIpsum@example.com",
        //     "phone" => "123123123123",
        //     "address" => "456 Elm St, Othertown, USA",
        //     "created_at" => "2024-07-02T09:00:00Z",
        //     "updated_at" => "2024-07-02T09:00:00Z"
        // ]);
    }
}

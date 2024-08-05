<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            "id" => 1,
            "name" => "John Doe",
            "email" => "john.doe@example.com",
            "phone" => "1234567890",
            "position" => "Warehouse Manager",
            "hire_date" => "2020-01-15",
            "created_at" => "2020-01-15T08:00:00Z",
            "updated_at" => "2020-01-15T08:00:00Z"
        ]);
        Employee::create([
            "id" => 2,
            "name" => "Jane Smith",
            "email" => "jane.smith@example.com",
            "phone" => "0987654321",
            "position" => "Inventory Specialist",
            "hire_date" => "2019-06-01",
            "created_at" => "2019-06-01T09:00:00Z",
            "updated_at" => "2019-06-01T09:00:00Z"
        ]);
        Employee::create([
            "id" => 3,
            "name" => "Michael Johnson",
            "email" => "michael.johnson@example.com",
            "phone" => "1122334455",
            "position" => "Forklift Operator",
            "hire_date" => "2018-03-20",
            "created_at" => "2018-03-20T10:00:00Z",
            "updated_at" => "2018-03-20T10:00:00Z"
        ]);
    }
}

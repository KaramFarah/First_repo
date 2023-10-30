<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
                [   
                    'id'    => 1,
                    'name'      => 'IT',
                ],
                [   
                    
                    'name'      => 'service',
                ],
                [   
                    
                    'name'      => 'customer_support',
                ],
                ];

                foreach($departments as $department){
                    Department::create($department);
                }
    }
}

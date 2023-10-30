<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [

            [
                'first_name'      => 'karam',
                'last_name'     => 'farha',
                'middle_name'  => 'Ali' ,
                'mother_name'     => 'dania',
                'birth_place'  => 'aleppo',
                'birthday'  => date(now()),
                'sex'  => 'm',
                'title'  => 'Mr',
                'national_number'  => '05050098767',
                'passport_number'  => '123456789',
                'address'  => 'latakia',
                'landline'  => '8819333',
                'phone'  => '098765423',
                'department_id'  => 1,
                'health_status'  => 'decent',
                'socail_status'  => 'married',
                'partner_name'  => '',
                'children'  => '',
                'exp_brief'  => '',
            ] ,
            [
                'first_name'      => 'amal',
                'last_name'     => 'zaino',
                'middle_name'  => 'mohammed' ,
                'mother_name'     => 'rula',    
                'birth_place'  => 'hama',
                'birthday'  => date(now()),
                'sex'  => 'f',
                'title'  => 'Ms',
                'national_number'  => '0505099991111',
                'passport_number'  => '1237778889',
                'address'  => 'latakia',
                'landline'  => '88193343',
                'phone'  => '098765423',
                'department_id'  => 1,
                'health_status'  => 'handicapped',
                'socail_status'  => 'single',
                'partner_name'  => '',
                'children'  => '',
                'exp_brief'  => '',
            ],
            [
                'first_name'      => 'khaled',
                'last_name'     => 'jeha',
                'middle_name'  => 'omar' ,
                'mother_name'     => 'carla',
                'birth_place'  => 'hama',
                'birthday'  => date(now()),
                'sex'  => 'm',
                'title'  => 'Dr',
                'national_number'  => '05050229911',
                'passport_number'  => '1237007889',
                'address'  => 'latakia',
                'landline'  => '88193343',
                'phone'  => '098765423',
                'department_id'  => 2,
                'health_status'  => 'decent',
                'socail_status'  => 'single',
                'partner_name'  => '',
                'children'  => '',
                'exp_brief'  => '',
            ]
            
           ];

           foreach($employees as $employee){
            Employee::create($employee);
           }
    }
}

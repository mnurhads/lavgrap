<?php

namespace Database\Seeders;

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
        $kerjas = [
            [
                'user_id' => '1',
                'alamat_id' => '1',
                'supervisor'  => 'Admin Million',
                'position'	    => 'Programmer',
                'status_employee'   => '0',
            ],
            [
                'user_id' => '2',
                'alamat_id' => '2',
                'supervisor'  => 'Budi Million',
                'position'	    => 'System Analyst',
                'status_employee'   => '0',
            ],
            [
                'user_id' => '3',
                'alamat_id' => '3',
                'supervisor'  => 'Rendi Million',
                'position'	    => 'Junior Programmer',
                'status_employee'   => '0',
            ],
            [
                'user_id' => '4',
                'alamat_id' => '4',
                'supervisor'  => 'Beber Million',
                'position'	    => 'Data Analyst',
                'status_employee'   => '1',
            ],
            [
                'user_id' => '5',
                'alamat_id' => '5',
                'supervisor'  => 'Fina Million',
                'position'	    => 'Finance',
                'status_employee'   => '2',
            ],
            [
                'user_id' => '6',
                'alamat_id' => '6',
                'supervisor'  => 'Vani Million',
                'position'	    => 'HRD',
                'status_employee'   => '1',
            ],
            [
                'user_id' => '7',
                'alamat_id' => '7',
                'supervisor'  => 'Yuda Million',
                'position'	    => 'IT Security',
                'status_employee'   => '1',
            ],
            [
                'user_id' => '8',
                'alamat_id' => '8',
                'supervisor'  => 'Berry Million',
                'position'	    => 'CSR',
                'status_employee'   => '0',
            ],
            [
                'user_id' => '9',
                'alamat_id' => '9',
                'supervisor'  => 'Beby Million',
                'position'	    => 'Data Science',
                'status_employee'   => '2',
            ],
            [
                'user_id' => '10',
                'alamat_id' => '10',
                'supervisor'  => 'Duta Million',
                'position'	    => 'Data Analyts Manager',
                'status_employee'   => '2',
            ],
        ];

        foreach($kerjas as $user) {
            Employee::create($user);
        }
    }
}

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
                'user_up'  => 'Admin Million',
                'position'	    => 'Programmer',
                'status_employee'   => '0',
            ],
            [
                'user_id' => '2',
                'user_up'  => 'Budi Million',
                'position'	    => 'System Analyst',
                'status_employee'   => '0',
            ],
            [
                'user_id' => '3',
                'user_up'  => 'Rendi Million',
                'position'	    => 'Junior Programmer',
                'status_employee'   => '0',
            ],
            [
                'user_id' => '4',
                'user_up'  => 'Beber Million',
                'position'	    => 'Data Analyst',
                'status_employee'   => '1',
            ],
            [
                'user_id' => '5',
                'user_up'  => 'Fina Million',
                'position'	    => 'Finance',
                'status_employee'   => '2',
            ],
            [
                'user_id' => '6',
                'user_up'  => 'Vani Million',
                'position'	    => 'HRD',
                'status_employee'   => '1',
            ],
            [
                'user_id' => '7',
                'user_up'  => 'Yuda Million',
                'position'	    => 'IT Security',
                'status_employee'   => '1',
            ],
            [
                'user_id' => '8',
                'user_up'  => 'Berry Million',
                'position'	    => 'CSR',
                'status_employee'   => '0',
            ],
            [
                'user_id' => '9',
                'user_up'  => 'Beby Million',
                'position'	    => 'Data Science',
                'status_employee'   => '2',
            ],
            [
                'user_id' => '10',
                'user_up'  => 'Duta Million',
                'position'	    => 'Data Analyts Manager',
                'status_employee'   => '2',
            ],
        ];

        foreach($kerjas as $user) {
            Employee::create($user);
        }
    }
}

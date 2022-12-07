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
                'fullname'  => 'Admin Million',
                'position'	    => 'Programmer',
                'status_employee'   => '0',
            ],
            [
                'fullname'  => 'Budi Million',
                'position'	    => 'System Analyst',
                'status_employee'   => '0',
            ],
            [
                'fullname'  => 'Rendi Million',
                'position'	    => 'Junior Programmer',
                'status_employee'   => '0',
            ],
            [
                'fullname'  => 'Beber Million',
                'position'	    => 'Data Analyst',
                'status_employee'   => '1',
            ],
            [
                'fullname'  => 'Fina Million',
                'position'	    => 'Finance',
                'status_employee'   => '2',
            ],
            [
                'fullname'  => 'Vani Million',
                'position'	    => 'HRD',
                'status_employee'   => '1',
            ],
            [
                'fullname'  => 'Yuda Million',
                'position'	    => 'IT Security',
                'status_employee'   => '1',
            ],
            [
                'fullname'  => 'Berry Million',
                'position'	    => 'CSR',
                'status_employee'   => '0',
            ],
            [
                'fullname'  => 'Beby Million',
                'position'	    => 'Data Science',
                'status_employee'   => '2',
            ],
        ];

        foreach($kerjas as $user) {
            Employee::create($user);
        }
    }
}

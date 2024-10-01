<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Role;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees=Employee::get();
        // return $employee->roles;

        foreach($employees as $user){
            echo $user->name.'<br>';

            foreach($user->roles as $check){
                echo $check->roles,'<br>';
            }

            echo '<hr>';   
        }
    }

    public function create(){
        $employee=Employee::find(2);    

        $roles=[1,4];

        $employee->roles()->detach($roles);
    }
}

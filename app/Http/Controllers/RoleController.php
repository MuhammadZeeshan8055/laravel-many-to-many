<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $role=Role::find(4);
        return $role->employee;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;

class RegisterEmployee extends Controller
{
    public function registerNewEmployee(EmpeloyeeRequest $request)
    {
        Employees::insertRow($request);
        return redirect('admin/employees');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
    protected $fillable = [
        'first_Name', 'last_Name', 'company_id', 'email', 'phone'
    ];




    public function companies()
    {
      return $this->belongsTo(Companies::class);
    }
/*
* insert new employee object into employess table
*/
    public static function insertRow($data)
    {
        $employees = new Employees();
        $employees->first_Name = $data->first_Name;
        $employees->last_Name = $data->last_Name;
        $employees->company_id = $data->company_id;
        $employees->email = $data->email;
        $employees->phone = $data->phone;
        $employees->save();
    }


      // update data 
  public static function updateRow($data, $id){

    $employee = Employees::find($id);
    $employee->first_Name = $data->first_Name;
    $employee->last_Name= $data->last_Name;
    $employee->company_id= $data->company_id;
    $employee->email= $data->email;
    $employee->phone= $data->phone;

  }
}

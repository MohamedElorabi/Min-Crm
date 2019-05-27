<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
  protected $table = 'companies';
  protected $fillable = [
      'name', 'email', 'logo',
  ];
  
/*
  public function employees()
  {
      return $this->hasMany('App\Employess');
  }
*/
  public function employees()
	{
		return $this->hasMany(Employees::class);
  }
  

  // insert data Companies
  public static function insertCompanies($data){

  $logo = time() . '.' . $data->logo->getClientOriginalExtension();

        $companies = new Companies;

        $companies->name = $data->name;

        $companies->email = $data->email;

        $companies->logo = $logo;
        
        $companies->save();

        $data->logo->move(public_path('upload'), $logo);
  }



  // update data 
  public static function updateRow($data, $id){

    $company = Companies::find($id);
    $company->name = $data->name;
    $company->email= $data->email;
    if(!empty($data->logo)){
    
      $company->$logo = move(public_path('upload'), $logo);
    }
    $company->save();
  }

}

@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">index</h3>
  </div>
  <!-- /.box-header -->
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Company ID</th>
                  <th>Email</th>
                  <th>Phone</th>
                </tr>
              </thead>
              <tbody> 
                    <tr>
                      @foreach ($employees as $employee)  
                      <tr>
                          <td>{{ $employee->id }}</td>
                          <td>{{ $employee->first_Name }}</td>
                          <td>{{ $employee->last_Name }}</td>
                          <td>{{ $employee->company_id }}</td>
                          <td>{{ $employee->email }}</td>
                          <td>{{ $employee->phone }}</td>
                        </tr>
                    @endforeach
                        
                      </tr>
                  
                </tbody>
                
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  
  
  @endsection
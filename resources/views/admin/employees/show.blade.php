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
                        <td>{{ $employees->id }}</td>
                        <td>{{ $employees->first_Name }}</td>
                        <td>{{ $employees->last_Name }}</td>
                        <td>{{ $employees->company_id }}</td>
                        <td>{{ $employees->email }}</td>
                        <td>{{ $employees->phone }}</td>
                      </tr>
                  
                </tbody>
                
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  
  
  @endsection
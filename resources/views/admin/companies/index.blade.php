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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Logo</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($companies as $company)  
                  <tr>
                      <td>{{ $company->id }}</td>
                      <td>{{ $company->name }}</td>
                      <td>{{ $company->email }}</td>
                      <td>{{ $company->logo }}</td>
                      <td>
                        <a href="{{ url('admin/companies/' . $company->id . '/show') }}" class="btn btn-info">Show</a>
                        <a href="{{ url('admin/companies/' . $company->id . '/edit') }}" class="btn btn-primary">Edit</a>
                        
                        {!! Form::open(['method'=>'Delete', 'url'=>['admin/companies', $company->id], 'style'=>'display:inline'])!!}
                        {!! Form::submit('Delete',['class'=> 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                      </td>
                    </tr>
                @endforeach
              </tbody>
              
            </table>
            {!! $companies->render() !!}
          </div><!-- /.box-body -->
        </div><!-- /.box -->
  <!-- /.box-body -->
</div>
<!-- /.box -->


@endsection

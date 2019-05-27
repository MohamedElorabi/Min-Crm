@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">edit</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">

    <form method="POST" action="{{ url('admin/employees') }}">
      {{ csrf_field() }}

      <div class="form-group">
          <label>First Name</label>
          <input type="text" name="first_Name"  class="form-control" value="{{ $employees->first_Name }}">
          @if ($errors->has('first_Name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_Name') }}</strong>
                </span>
          @endif
      </div>

      <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="last_Name"  class="form-control" value="{{ $employees->last_Name }}">
        @if ($errors->has('last_Name'))
                <span class="help-block">
                    <strong>{{ $errors->first('last_Name') }}</strong>
                </span>
          @endif
      </div>

      <div class="form-group">
        <label>Company ID</label>
        <input type="swlect" name="company_id"  class="form-control" value="{{ $employees->company_id }}">
        @if ($errors->has('company_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('company_id') }}</strong>
                </span>
          @endif
      </div>

      <div class="form-group">
          <label for="body">Email</label>
          <input type="email" name="email"  class="form-control" value="{{ $employees->email }}">
          @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
          @endif
      </div>

      <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone"  class="form-control" value="{{ $employees->phone }}">
        @if ($errors->has('phone'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
          @endif
      </div>

      <div class="form-group">
          <button type="submit" class="btn btn-primary">Add Employees</button>
      </div>

  </form>

  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->





@endsection

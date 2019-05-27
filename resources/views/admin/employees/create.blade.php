@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">create employees</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">

    <form method="POST" action="{{ url('admin/employees') }}">
      {{ csrf_field() }}

      <div class="form-group {{ $errors->has('first_Name') ? ' has-error' : '' }}">
          <label>First Name</label>
          <input type="text" name="first_Name"  class="form-control" value="{{ old('first_Name') }}">
          @if ($errors->has('first_Name'))
                <span class="help-block">
                    <strong>{{ $errors->first('first_Name') }}</strong>
                </span>
          @endif
      </div>

      <div class="form-group {{ $errors->has('last_Name') ? ' has-error' : '' }}">
        <label>Last Name</label>
        <input type="text" name="last_Name"  class="form-control" value="{{ old('last_Name') }}">
        @if ($errors->has('last_Name'))
                <span class="help-block">
                    <strong>{{ $errors->first('last_Name') }}</strong>
                </span>
          @endif
      </div>

      <div class="form-group {{ $errors->has('company_id') ? ' has-error' : '' }}">
        <label>Company ID</label>
          <select class="form-control" name="company_id">
              @if (count($companies) > 0)
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
              @endif
             
          </select>
          @if ($errors->has('company_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('company_id') }}</strong>
                </span>
          @endif
      </div>

      <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
          <label for="body">Email</label>
          <input type="email" name="email"  class="form-control" value="{{ old('email') }}">
          @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
          @endif
      </div>

      <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
        <label>Phone</label>
        <input type="text" name="phone"  class="form-control" value="{{ old('phone') }}">
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

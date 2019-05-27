@extends('admin.index')
@section('content')


<div class="box">
  <div class="box-header">
    <h3 class="box-title">create companies</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">

    <form method="POST" action="{{ url('admin/companies') }}" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
          <label for="title">Name</label>
          <input type="text" name="name"  class="form-control" value="{{ old('name') }}">
          @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
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

      <div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
          <label for="url">Image</label>
          <input  type="file" name="logo">
          @if ($errors->has('logo'))
                <span class="help-block">
                    <strong>{{ $errors->first('logo') }}</strong>
                </span>
          @endif
      </div>

      <div class="form-group">
          <button type="submit" class="btn btn-primary">Add Companies</button>
      </div>

  </form>

  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->



@endsection

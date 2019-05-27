@extends('admin.index')
@section('content')


<div class="box">
    <div class="box-header">
      <h3 class="box-title">edit companies</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
  
      <form method="POST" action="{{ url('admin/companies/' . $companies->id . '/update') }}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT"/>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" name="name"  class="form-control" value="{{ $companies->name }}">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
          @endif
        </div>
  
        <div class="form-group">
            <label for="body">Email</label>
            <input type="email" name="email"  class="form-control" value="{{ $companies->email }}">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
          @endif
        </div>
  
        <div class="form-group">
            <label for="url">Image</label>
            <input  type="file" name="logo" value="{{ $companies->logo }}">
            @if ($errors->has('logo'))
                <span class="help-block">
                    <strong>{{ $errors->first('logo') }}</strong>
                </span>
          @endif
        </div>
  
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
  
    </form>
  
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->




@endsection

@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{url('products')}}">
    <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
      <div class="col-sm-10">
         <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="description" name="description">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Price</label>
      <div class="col-sm-10">
         <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="price" name="price">
      </div>
    </div>
  
    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection
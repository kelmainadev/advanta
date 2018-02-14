@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['name']}}</td>
        <td>{{$post['description']}}</td>
    
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
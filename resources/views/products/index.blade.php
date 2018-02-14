@extends('master')
@section('content')
  <div class="container">
    <b><a href="products/create">Add product</a></b>
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
        <td><a href="{{action('ProductController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ProductController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
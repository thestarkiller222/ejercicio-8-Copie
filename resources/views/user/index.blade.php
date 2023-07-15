@extends('layout.app')
@section('content')
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
  </tr>
  @foreach($users as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
  </tr>
  @endforeach
</table>
@endsection

@extends('layout.app')
@section('content')
    <h1>Crear Usuario<h1/>

    <form method="POST" action="{{route('users.store')}}">
        @csrf
        <input type="text" placeholder="Name" name="name"/>
        <input type="email" placeholder="Mail" name="email"/>
        <input type="text" placeholder="Phone Number" name="phone number"/>
        <input type="password" placeholder="Password" name="password"/>
        <button type="imput">Submit<button/>
        <button type="reset">Clear<button/>
    <form/>
    @endsection

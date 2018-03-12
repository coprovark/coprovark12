@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<h1>List</h1>


<table class="table">
    <tr>
        <td><h2>ID</h2></td>
        <td>Username</td>
        <td>Password</td>
        <td>status</td>
    </tr>
    @foreach($data_list as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->username}}</td>
        <td>{{$item->password}}</td>
        <td>{{$item->status}}</td>
        @endforeach
    </tr>
</table>

@endsection
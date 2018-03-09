@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form action="/page" method="post">
    <input type="password" name="number">
    <input type="submit" value="ส่งค่า">
</form>
<h2>แสดงค่า<h2>
    Password:{{$NUMBER}}<br>
@endsection
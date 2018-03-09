@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form action="/page12" method="post">
<input type="password" name="pass" value=""><br>
<input type="submit" value="ส่งค่า">
</form>
@endsection

@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<form action="/page11" method="post">
<select name="select">
   <option value="thai">thai</option>
   <option value="laos">laos</option>
   <option value="eng">eng</option>
</select><br>
<textarea name=area></textarea>
<br>
<input type="submit" value="ส่งค่า">
</form>

@endsection
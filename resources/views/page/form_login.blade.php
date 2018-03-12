@extends('layouts.main')

@section('content')
<h1 class="page-header">เข้าสู่ระบบ</h1>
<form action="/form_login2" method="post">

    <div class="form-group" style="width:60%">
        <label>User</label>
        <input type="text" class="form-control" placeholder="User" name="username" >
    </div>

    <div class="form-group" style="width:60%">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password" >
    </div>

    <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
    
</form>
    

<hr>
username = {{$username}}<br>
ID = {{$name}}
@endsection
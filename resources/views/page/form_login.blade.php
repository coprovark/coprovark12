@extends('layouts.main')

@section('content')
<h1 class="page-header">เข้าสู่ระบบ</h1>
<form action="/page" method="post">

    <div class="form-group" style="width:30%">
        <label>User</label>
        <input type="text" class="form-control" placeholder="User" name="user" >
    </div>

    <div class="form-group" style="width:30%">
        <label>Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password" >
    </div>

    <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
    
</form>
    id set<br>
     User = admin<br>
     Password = 1234<br>
    <br>
    input<br>
     User = {{$USER}}<br>
     Password = {{$PASSWORD}}<br>
    <br>
<h1>
    <?php
        if($USER=='admin' && $PASSWORD=='1234'){
            echo "TRUE";
        }else{
            echo "FALSE";
        }
    ?>
</h1>

@endsection
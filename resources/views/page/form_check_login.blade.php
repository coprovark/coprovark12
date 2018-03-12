<!-- Route       : form_check_login
Controller  : form_check_login
view        : form_check_login.blade.php -->
<form action="/form_check_login" method="post">

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
@foreach ($users as $user) 
    {{ $user->id }}
@endforeach
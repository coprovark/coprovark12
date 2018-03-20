@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<h1>List</h1>
<form action="/list_users_find" method="post" class="form-inline">
<div style="float:right">
        <div class="form-group">
            <input type="text" name="find" class="form-control" value="{{ $find }}" placeholder="ค้นหา....">
        </div>
        <button type="submit" class="btn btn-warning">ค้นหา</button>
    </div>
 </form>
 <br>
 <a href="/form_register" type="button" class="btn btn-primary btn-md" style="margin-center">เพิ่มข้อมูล</a>
 <br>
 <br>
<table class="table table-bordered" style="text-align: center;">
    <tr class="info">
        <td>ID</td>
        <td>Username</td>
        <td>Password</td>
        <td>status</td>
        <td></td>
        <td></td>
    </tr>
    @foreach($data_list as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->username}}</td>
        <td>{{$item->password}}</td>
        <td>{{$item->status}}</td>
        <td><button type="button" class="btn btn-info">Edit</button></td>

        
        <td><button type="button" class="btn btn-danger" onclick="return _confirm('{{ $item->id }}')">
                    <span class="glyphicon glyphicon-remove"></span>  
                    ลบรายการ
                </button></button></td>
        @endforeach
    </tr>
</table>
<script>
    function _confirm(id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = '/delete_user/'+id;
        }
    }
</script>
@endsection
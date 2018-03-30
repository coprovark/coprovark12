@extends('layouts.main')

@section('content')
<style>
    td{
        border:1px solid #d9d9d9;
    }
</style>
<div class="container-fluid">
    <h3>สมาชิก</h3>
</div>
<br>

<form class="form-inline" action="/find_co" method="post">
    <a href="/co_register">
        <button type="button" class="btn btn-success">เพิ่ม</button>
    </a>
    <div style="float:right">
        <div class="form-group">
            <input type="text" name="find" class="form-control" value="{{ $find }}" placeholder="ใส่รหัสนักศึกษา">
        </div>
        <button type="submit" class="btn btn-warning">ค้นหา</button>
    </div>
</form>
<br>

<table class="table table-hover">
    <tr style="background-color:#bfbfbf; font-weight:bold; text-align:center; width:100%;">
        <td style="width:2%">ลำดับ</td>
        <td style="width:15%">รหัสนักศึกษา</td>
        <td style="width:25%">ชื่อ-สกุล</td>
        <td style="width:15%">วัน เดือน ปีเกิด</td>
        <td style="width:25%">คณะ</td>
        <td style="width:28%">ดำเนินการ</td>
    </tr>
    @foreach($co_show as $item)
    <tr>
        <td style="text-align:center;">{{ $id++ }}</td>
        <td style="text-align:center;">{{ $item->main_studentCode }}</td>
        <td>{{ $item->title_name }}{{ $item->main_name }}</td>
        <td style="text-align:center;">{{ $item->main_birthday}}</td>
        <td>{{ $item->faculty_name }}</td>
        <td>            
            <button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="ลบข้อมูล" 
                onclick="return _confirm('{{ $item->main_id }}')">ลบ
            </button>
            <a href="/co_edit/{{ $item->main_id }}">
                <button type="button" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="แก้ไขข้อมูล">แก้ไข</button>
            <a>
            <a href="/co_detail/{{ $item->main_id }}">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="ดูรายละเอียด">รายละเอียด</button>
            </a>
        </td>
    </tr>
    @endforeach
</table>
<br>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
    function _confirm(id){
        if(confirm('ยืนยันการลบข้อมูล')){
            window.location.href = 'delete_co/'+id;
                                    //'/delete_user/15';
        }
    }
</script>
@endsection
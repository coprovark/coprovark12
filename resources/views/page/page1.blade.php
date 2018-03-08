@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
    <form action="/page" method="post">
    <input type="text" name="name">
    <input type="checkbox" name="checkbox" value="1500">
    <input type="checkbox" name="checkbox" value="2500">
    <input type="hidden" name="hidden" value="20"><br>
    เพศ:
    <input type="radio" name="radio" value="ผู้">ผู้
    <input type="radio" name="radio" value="เมีย">เมีย<br>
    <input type="submit" value="ส่งค่า">
    </form>

    <h2>แสดงค่า<h2>
    ชื่อ:{{$NAME}}<br>
    อายุ:{{$ID}}<br>
    เพศ:{{$GEN}}<br>
    ราคา:{{$PRICE}}<br>

@endsection
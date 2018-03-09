@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
    <form action="/page" method="post">
    <input type="textarea" name="name">
    <input type="checkbox" name="price" value="1500">
    <input type="checkbox" name="price" value="2500">
    <input type="password" name="year" value=""><br>
    เพศ:
    <input type="radio" name="sex" value="ผู้">ผู้
    <input type="radio" name="sex" value="เมีย">เมีย<br>
    <input type="submit" value="ส่งค่า">
    </form>

    <h2>แสดงค่า<h2>
    ชื่อ:{{$NAME}}<br>
    อายุ:{{$ID}}<br>
    เพศ:{{$GEN}}<br>
    ราคา:{{$PRICE}}<br>

@endsection
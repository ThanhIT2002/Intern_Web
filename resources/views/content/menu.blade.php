{{-- đây là lệnh dùng ở đầu view con, chỉ định layout mà view con sẽ kế thừa. --}}
@extends('Layout.app')
@section('header')
    @include('Layout.Header')
@endsection
{{-- lệnh này dùng trong view con để tạo 1 vùng nội dung cho layout. --}}
@section('sidebar')
        @include('menu.category')
@endsection
@section('content')
        @include('menu.card')
@endsection
@section('footer')
    @include('Layout.footer')
@endsection
{{-- đây là lệnh dùng ở đầu view con, chỉ định layout mà view con sẽ kế thừa. --}}
@extends('Layout.LayoutContact')
@section('header')
    @include('Layout.Header')
@endsection
@section('sidebar')
        @include('contact.category')
@endsection
@section('content')
        @include('contact.SpaGrooming')
@endsection
@section('footer')
    @include('Layout.footer')
@endsection
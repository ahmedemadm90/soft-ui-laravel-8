@extends('layouts.app')
@section('title')
    {{__('Dashboard')}}
@endsection
@section('content')
<div class="container p-1">
    Test
</div>
@endsection
@section('navbar')
    @include('layouts.navbar')
@endsection
@section('sidebar')
    @include('layouts.sidebar')
@endsection
@section('cards')
    @include('layouts.cards')
@endsection
@section('footer')
    @include('layouts.footer')
@endsection

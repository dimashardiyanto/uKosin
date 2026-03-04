@extends('layouts.front.app')
@section('description')
uKost, cari kos dan apartement makin mudah hanya di uKost. aplikasi pencari kos di indonesia.
@endsection
@section('title')
Selamat Datang di uKost
@endsection


@section('content')
@include('front.banner')
<br><br><br>
@if ($promo->count() > 0)
@include('front.sliderCard')
@endif
<br><br><br>
@include('front.cardContent')
<br><br><br>
@include('front.byKota')

@endsection

@extends('layouts.app')

@section('title', 'OCNOT - Layanan Notaris Online')

@section('content')
    @include('components.navbar')
    @include('components.hero')
    @include('components.about')
    @include('components.what-we-do')
    @include('components.testimonial')
    @include('components.cek-akta')
    @include('components.galeri')
    @include('components.footer')
@endsection
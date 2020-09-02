@extends('layouts.index')

@section('main')

@include('home.partial.categories')
<!-- end home -->

<main id="main">
    <!-- ======= About Section ======= -->
    @include('home.partial.about')
    <!-- End About Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('home.partial.testimonials')
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    @include('home.partial.team')
    <!-- End Team Section -->

    <!-- ======= Terms-Policy Section ======= -->
    @include('home.partial.terms')
    <!-- End Terms-Policy Section -->

    <!-- ======= Contact Section ======= -->
    @include('home.partial.message')
    <!-- End Contact Section -->
</main>
@endsection

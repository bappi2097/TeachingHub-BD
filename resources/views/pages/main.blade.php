@extends('layouts.index')

@section('main')
<main id="main">
    @include('pages.partial.breadcrumb')
    <section class="portfolio-details">
        <div class="container">
            @include('pages.partial.books')
        </div>
    </section>
</main>
@endsection

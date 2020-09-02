@extends('layouts.index')

@section('main')
<main id="main">
    @include('suggestions.partial.breadcrumb')
    <section class="portfolio-details">
        <div class="container">
            @include('suggestions.partial.suggestion')
        </div>
    </section>
</main>
@endsection

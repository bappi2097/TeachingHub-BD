<div class="portfolio-description">
    <h2>Suggestions</h2>
    @if (!$category->suggestions->isEmpty())
    @foreach ($category->suggestions as $suggestion)
    <h3>{{$suggestion->title}}</h3>
    {!!$suggestion->body!!}
    @endforeach
    @endif
</div>

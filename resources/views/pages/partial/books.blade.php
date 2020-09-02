<div class="portfolio-description">
    <h2>BOOKS</h2>
    <p>
        @if (!$category->books->isEmpty())
        you can find all books here.
        @foreach ($category->books as $book)
        <p>
            <a href="{{$book->url}}">
                {{$book->title}}
            </a>
        </p>
        @endforeach
        @endif
    </p>
</div>

<!-- ======= Breadcrumbs Section ======= -->
<section class="breadcrumbs" style="margin: 0;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>{{$category->title}}</h2>
            <ol>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('page', ['slug'=> $category->slug])}}">{{$category->title}}</a></li>
            </ol>
        </div>
    </div>
</section>

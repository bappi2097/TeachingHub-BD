<section style="padding: 0">
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">
            <div>
                {{-- <h7>Search</h7>
                <form method="post" action="#" id="search_form">
                    <p>
                        <input class="search" type="text" name="search_field" value="Enter keywords....." />
                        <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px"
                            src="assets/img/search_2.png" alt="Search" title="Search" />
                    </p>
                </form> --}}
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @if(!$classes->isEmpty())
                        @foreach ($classes as $class)
                        <li data-filter=".{{$class->filter}}">{{$class->title}}</li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container" data-aos="fade-up">
                @if(!$classes->isEmpty())
                @foreach ($classes as $class)
                @if (!$class->categories->isEmpty())
                @foreach ($class->categories as $category)
                <div class="col-lg-4 col-md-6 portfolio-item {{$class->filter}}">
                    <div class="portfolio-wrap">
                        <img src="{{asset($category->image)}}" class="img-fluid" alt="" />
                        <div class="portfolio-info" style="opacity: 1;">
                            <h4>{{$category->title}}</h4>
                            {!! !empty($category->subtitle) ? "<p>".$category->subtitle."</p>" : ''!!}
                            <div class="portfolio-links">
                                <a href="{{asset($category->image)}}" data-gall="portfolioGallery" class="venobox"
                                    title="পঞ্চম শ্রেণী"><i class="bx bx-plus"></i></a>
                                <a href="{{route('page',['slug' => $category->slug])}}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                @endforeach
                @endif
            </div>
        </div>
    </section>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

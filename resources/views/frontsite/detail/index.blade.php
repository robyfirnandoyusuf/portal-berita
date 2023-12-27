@extends('layouts.layout')

@section('content')
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($berita->gambar as $hihi)
                                    <div class="carousel-item  {{ $loop->index == 0 ? 'active' : '' }}">
                                        <img class="" src="/backsite-assets-img/{{ $hihi->filename }}"
                                            alt="First slide" width="600px" height="550px">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <div class="blog_details">
                            <h2>{{ $berita->judul }}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> Views </a></li>
                                {{-- @dd($berita->views) --}}
                                <li><i class="fa-solid fa-eye"></i> {{ count($berita->visitors) }}
                                </li>
                            </ul>
                            <p class="excert">
                                {!!html_entity_decode($berita->description )!!}
                            </p>
                            <!-- <div class="quote-wrapper">
                                        <div class="quotes">
                                            MCSE boot camps have its supporters and its detractors. Some people do not understand
                                            why you
                                            should have to spend money on boot camp when you can get the MCSE study materials
                                            yourself at
                                            a fraction of the camp price. However, who has the willpower to actually sit through a
                                            self-imposed MCSE training.
                                        </div>
                                    </div> -->
                        </div>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=#url" target="_blank"><i class="fa-brands fa-facebook" style="font-size: 2.8em; margin-right: 12px;"></i></a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://chillyfacts.com/create-linkedin-share-button-on-website-webpages&title=Create LinkedIn Share button on Website Webpages&summary=chillyfacts.com&source=Chillyfacts" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
                          <i class="fa-brands fa-linkedin" style="font-size: 2.8em; margin-right: 12px;"></i>
                        </a>
                        <a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share"><i class="fa-brands fa-whatsapp" style="font-size: 2.8em; color:rgb(102, 164, 8);"></i></a>
          
                    </div>
                    <div class="navigation-top">
                    </div>
                    <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="/assets/img/blog/author.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Harvard milan</h4>
                                </a>
                                <p>Second divided from form fish beast made. Every of seas all gathered use saying you're,
                                    he
                                    our dominion twon Second divided from</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <div id="disqus_thread"></div>
                        <script>
                            /**
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                            /*
                            var disqus_config = function () {
                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };
                            */
                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document,
                                    s = d.createElement('script');
                                s.src = 'https://portal-berita-3.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                                powered by Disqus.</a></noscript>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                @foreach (getCategory() as $ahaha)
                                <li>
                                    <a href="{{ route('kategori',$ahaha->id) }}">{{ $ahaha->kategori }}</a>
                                </li>
                                @endforeach
                                <!-- <li>
                                                                                    <a href="#" class="d-flex">
                                                                                        <p>Politik </p>
                                                                                        <p>(911)</p>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#" class="d-flex">
                                                                                        <p>Kartun </p>
                                                                                        <p>(11)</p>
                                                                                    </a>
                                                                                </li> -->
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <div class="media post_item">
                                <img src="/assets/img/post/post_1.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>From life was you fish...</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="/assets/img/post/post_2.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>The Amazing Huhhbyjnbble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="/assets/img/post/post_3.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="/assets/img/post/post_4.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div>
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title">Instagram Feeds</h4>
                            <ul class="instagram_row flex-wrap">
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/post/post_5.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/post/post_6.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/post/post_7.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/post/post_8.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/post/post_9.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="/assets/img/post/post_10.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-orange w-100 btn_1 boxed-btn"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->
@endsection


<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Posts" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                </span>
            </div><!-- /input-group -->
            <div class="br"></div>
        </aside>
        <aside class="single_sidebar_widget author_widget">
            <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
            <h4>Charlie Barber</h4>
            <p>Senior blog writer</p>
            <div class="social_icon">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
            <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you
                should have to spend money on boot camp when you can get. Boot camps have itssuppor
                ters andits detractors.</p>
            <div class="br"></div>
        </aside>
        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Популярные посты</h3>
            @foreach($postPopular as $val)
                <div class="media post_item">
                    <img class="my-img" src="storage/{{$val->thumbnail}}" alt="post">
                    <div class="media-body">
                        <a href="blog-details.html">
                            <h3>{{$val->title}}</h3>
                        </a>
                        <p>{{$val->updated_at}}</p>
                    </div>
                </div>
            @endforeach
            <div class="br"></div>
        </aside>
        <aside class="single_sidebar_widget ads_widget">
            <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
            <div class="br"></div>
        </aside>
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Категории</h4>
            <ul class="list cat-list">
                @foreach($category as $val)
                    <li>
                        <a href="#" class="d-flex justify-content-between">
                            <p>{{$val->category}}</p>
                            <p>({{$val->countPost}})</p>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="br"></div>
        </aside>
        <aside class="single-sidebar-widget newsletter_widget">
            <h4 class="widget_title">Newsletter</h4>
            <p>
                Here, I focus on a range of items and features that we use in life without
                giving them a second thought.
            </p>
            <div class="form-group d-flex flex-row">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                           onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                </div>
                <a href="#" class="bbtns">Subcribe</a>
            </div>
            <p class="text-bottom">You can unsubscribe at any time</p>
            <div class="br"></div>
        </aside>
        <aside class="single-sidebar-widget tag_cloud_widget">
            <h4 class="widget_title">Tag Clouds</h4>
            <ul class="list">
                <li><a href="#">Technology</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Architecture</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Art</a></li>
                <li><a href="#">Adventure</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Lifestyle</a></li>
                <li><a href="#">Adventure</a></li>
            </ul>
        </aside>
    </div>
</div>

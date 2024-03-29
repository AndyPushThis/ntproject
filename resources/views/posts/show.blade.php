<x-layouts.main>
    <div class="content">
        <section class="big-pad-sec">
            <div class="container">
                <!-- post -->
                <div class="post fl-wrap fw-post">
                    <h2><span>{{ $post->title }}</span></h2>
                    <ul class="blog-title-opt">
                        <li>{{ $post->created_at->format('d M Y') }}</a></li>
                        <li> - </li>
                        <li style="text-transform: uppercase">{{ $post->category?->name }}</li>
                    </ul>
                    <!-- blog media -->
                    <div class="blog-media fl-wrap">
                        <div class="single-slider fl-wrap" data-effects="slide">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="{{ asset('images/folio/1.jpg') }}" alt=""></div>
                                    <div class="swiper-slide"><img src="{{ asset('images/folio/1.jpg') }}" alt=""></div>
                                    <div class="swiper-slide"><img src="{{ asset('images/folio/1.jpg') }}" alt=""></div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                                <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- blog media end -->
                    <div class="blog-text fl-wrap">
                        <div class="pr-tags fl-wrap">
                            <span>Tags : </span>
                            <ul>
                                @foreach($post->tags as $tag)
                                    <li><a href="#">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <p>{{ $post->body }}</p>
                        <div class="share-holder block-share  fl-wrap ">
                            <span>Share :</span>
                            <div class="share-container  isShare"></div>
                        </div>
                    </div>
                    <div class="content-nav fl-wrap">
                        <ul>
                            <li>
                                <span>Next</span>
                                <a href="portfolio-single.html">Living my dream</a>
                            </li>
                            <li>
                                <span>Prev</span>
                                <a href="portfolio-single.html">Sunny side up</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- post end-->
                <!-- post-author-->
                <div class="post-author">
                    <div class="author-img">
                        <img alt='' src="images/blog/1.jpg">
                    </div>
                    <div class="author-content">
                        <h5><a href="#">Jane Kowalski</a></h5>
                        <p>At one extremity the rope was unstranded, and the separate spread yarns were all braided and woven round the socket of the harpoon; the pole was then driven hard up into the socket; from the lower end the rope was traced half-way along the pole’s length, and firmly secured so, with intertwistings of twine.</p>
                        <div class="author-social">
                            <ul>
                                <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--post-author end-->
                <div id="comments" class="single-post-comm">
                    <!--title-->
                    <h6 id="comments-title">Comments<span>( 2 )</span></h6>
                    <ul class="commentlist clearafix">
                        <li class="comment">
                            <div class="comment-body">
                                <div class="comment-author">
                                    <img alt='' src='images/blog/users/1.jpg' width="50" height="50">
                                </div>
                                <cite class="fn"><a href="#">Kevin</a></cite>
                                <div class="comment-meta">
                                    <h6><a href="#">January 02, 2014 at 07:39 am</a> / <a class='comment-reply-link' href="#">Reply</a></h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                            </div>
                        </li>
                        <li class="comment">
                            <!--comment body-->
                            <div class="comment-body">
                                <div class="comment-author">
                                    <img alt='' src='images/blog/users/1.jpg' width="50" height="50">
                                </div>
                                <cite class="fn"><a href="#">Andy</a></cite>
                                <div class="comment-meta">
                                    <h6><a href="#">January 22, 2014 at 03:19 am</a> / <a class='comment-reply-link' href="#">Reply</a></h6>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div id="respond" class="clearafix">
                        <h6 id="reply-title">Leave A Review</h6>
                        <div class="comment-reply-form clearfix">
                            <form action="#" method="post" id="commentform" class="form-horizontal" name="commentform">
                                <div class="comment-form-author control-group">
                                    <div class="controls">
                                        <input id="author" name="author" type="text" value="" size="40" aria-required="true" />
                                    </div>
                                    <label class="control-label" for="author">Name </label>
                                </div>
                                <div class="comment-form-email control-group">
                                    <div class="controls">
                                        <input id="email" name="email" type="text" value="" size="40" aria-required="true" />
                                    </div>
                                    <label class="control-label" for="email">Email </label>
                                </div>
                                <div class="comment-form-comment control-group">
                                    <div class="controls">
                                                    <textarea id="comment" name="comment" cols="50" rows="8" aria-required="true" placeholder="Your comment here..">
                                                    </textarea>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <div class="controls">
                                        <button class="transition button" type="submit">Post Comment</button>
                                        <input type='hidden' name='comment_post_ID' value='30' id='comment_post_ID'> <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end respond-->
                </div>
                <!--comments end -->
            </div>
        </section>
    </div>
</x-layouts.main>

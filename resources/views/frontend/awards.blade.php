@extends('layouts.frontend')
@section('demo')
current current-menu-ancestor current-menu-parent
@endsection
@section('body')


<section class="page-title" style="background-image: url({{asset('frontend/uploads/2021/10/pattern-16.png')}})">
   <div class="pattern-layer-one"
      style="background-image: url({{asset('frontend/themes/moko/assets/images/main-slider/pattern-1.png')}})"></div>
   <div class="pattern-layer-two"
      style="background-image: url({{asset('frontend/themes/moko/assets/images/background/pattern-17.png')}})"></div>
   <div class="pattern-layer-three"
      style="background-image: url({{asset('frontend/themes/moko/assets/images/background/pattern-18.png')}})"></div>
   <div class="pattern-layer-four"
      style="background-image: url({{asset('frontend/themes/moko/assets/images/icons/cross-icon.png')}})"></div>
   <div class="auto-container">
      <h2> Awards</h2>
      <ul class="page-breadcrumb">
         <li><a href="../index.html">Home</a></li>
         <li>Awards</li>
      </ul>
   </div>
</section>
<!-- End Page Title Section -->
<div data-elementor-type="wp-page" data-elementor-id="723" class="elementor elementor-723">
   <section
      class="elementor-section elementor-top-section elementor-element elementor-element-8bda09d elementor-section-full_width elementor-section-height-default elementor-section-height-default"
      data-id="8bda09d" data-element_type="section">
      <div class="elementor-container elementor-column-gap-default">
         <div
            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5e38bf0"
            data-id="5e38bf0" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
               <div
                  class="elementor-element elementor-element-a7ab0c7 elementor-widget elementor-widget-moko_blog_with_sidebar"
                  data-id="a7ab0c7" data-element_type="widget" data-widget_type="moko_blog_with_sidebar.default">
                  <div class="elementor-widget-container">

                     <!-- Sidebar Page Container -->
                     <div class="sidebar-page-container">
                        <div class="auto-container">
                           <div class="row clearfix">


                              <!-- Content Side -->
                              {{-- <div class="content-side right-sidebar col-lg-8 col-md-12 col-sm-12">
                                 <div class="row clearfix"> --}}
                                    <!-- News Block -->
                                    @foreach ($awards as $award)
                                    <div class="news-block col-lg-4 col-md-6 col-sm-12" >
                                       <div class="inner-box wow fadeInLeft" data-wow-delay="0ms"
                                          data-wow-duration="1500ms" >
                                          <div class="image"  >
                                             <img fetchpriority="high" decoding="async" width="370" style="height: 270px"
                                                src="{{asset($award->img)}}"
                                                class="attachment-moko_370x250 size-moko_370x250 wp-post-image" 
                                                alt="" /> <!-- Overlay Box -->
                                             <div class="overlay-box">
                                                <div class="overlay-inner">
                                                   <div class="content">
                                                      <a href="../google-now-disregards-or-overlooks-all-reciprocal-links-3/index.html"
                                                         class="icon flaticon-unlink"></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="lower-content">
                                             {{-- <ul class="post-meta">
                                                <li><a href="../author/admin/index.html"><span
                                                         class="icon fa fa-user"></span> admin</a></li>
                                                <li><a href="../2021/11/index.html"><span
                                                         class="icon fa fa-calendar"></span> November 2, 2021</a></li>
                                             </ul> --}}
                                             <h5><a href="javascript:void(0)">{{$award->headline}}</a></h5>
                                                   <p>{{$award->description}}</p>
                                          </div>
                                       </div>
                                    </div>
                                
                                    @endforeach
                                       
                                    
                                 </div>

                                 <!-- Post Share Options -->
                                

                                 {{-- <div class="styled-pagination text-center">
                                    <ul class="pagination">
                                       <li><span aria-current="page" class="page-numbers current">1</span></li>
                                       <li><a class="page-numbers" href="page/2/index.html">2</a></li>
                                       <li><a class="next page-numbers" href="page/2/index.html"><i
                                                class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                 </div> --}}
                                 
                                
                                 
                              </div>

                              <!-- Sidebar Side -->
                              {{-- <div class="sidebar-side left-sidebar col-lg-4 col-md-12 col-sm-12">
                                 <aside class="sidebar sticky-top">
                                    <div id="search-2" class="widget sidebar-widget widget_search">
                                       <!-- Search -->
                                       <div class="search-box">
                                          <form method="get" action="https://wp.themerange.net/moko/">
                                             <div class="form-group">
                                                <input type="search" name="s" placeholder="Search Here">
                                                <button type="submit"><span class="icon fa fa-search"></span></button>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                    <div id="categories-2" class="widget sidebar-widget widget_categories">
                                       <div class="sidebar-title">
                                          <h4>Categories</h4>
                                       </div>
                                       <ul>
                                          <li class="cat-item cat-item-26"><a
                                                href="../category/blog-classic/index.html">Blog Classic<span>( 6
                                                   )</span></a>
                                          </li>
                                          <li class="cat-item cat-item-27"><a
                                                href="../category/blog-grid/index.html">Blog Grid<span>( 13 )</span></a>
                                          </li>
                                          <li class="cat-item cat-item-28"><a href="../category/blog-v1/index.html">Blog
                                                V1<span>( 3 )</span></a>
                                          </li>
                                          <li class="cat-item cat-item-29"><a href="../category/blog-v2/index.html">Blog
                                                V2<span>( 3 )</span></a>
                                          </li>
                                       </ul>

                                    </div>
                                    <div id="archives-2" class="widget sidebar-widget widget_archive">
                                       <div class="sidebar-title">
                                          <h4>Archives</h4>
                                       </div>
                                       <ul>
                                          <li><a href='../2021/11/index.html'>November 2021</a></li>
                                          <li><a href='../2021/10/index.html'>October 2021</a></li>
                                       </ul>

                                    </div>
                                    <div id="moko_recent_post-2" class="widget sidebar-widget widget_moko_recent_post">
                                       <!-- Categories Widget -->
                                       <div class="popular-posts">
                                          <div class="sidebar-title">
                                             <h4>Recent Posts</h4>
                                          </div>
                                          <div class="widget-content">


                                             <article class="post">
                                                <figure class="post-thumb"><img loading="lazy" decoding="async"
                                                      width="100" height="100"
                                                      src="../wp-content/uploads/2021/11/blog-list-1-100x100.jpg"
                                                      class="attachment-moko_100x100 size-moko_100x100 wp-post-image"
                                                      alt=""
                                                      srcset="https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-100x100.jpg 100w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-150x150.jpg 150w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-112x112.jpg 112w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-60x60.jpg 60w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-120x120.jpg 120w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-105x105.jpg 105w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-80x80.jpg 80w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-110x110.jpg 110w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-300x300.jpg 300w"
                                                      sizes="(max-width: 100px) 100vw, 100px" /><a
                                                      href="../absolute-links-vs-relative-links-seo-intrinsic-value-5/index.html"
                                                      class="overlay-box"><span class="icon fa fa-link"></span></a>
                                                </figure>
                                                <div class="text"><a
                                                      href="../absolute-links-vs-relative-links-seo-intrinsic-value-5/index.html">Absolute
                                                      Links vs. Relative Links – SEO Intrinsic Value</a></div>
                                                <div class="post-info">November 4, 2021</div>
                                             </article>


                                             <article class="post">
                                                <figure class="post-thumb"><img loading="lazy" decoding="async"
                                                      width="100" height="100"
                                                      src="../wp-content/uploads/2021/11/blog-list-1-100x100.jpg"
                                                      class="attachment-moko_100x100 size-moko_100x100 wp-post-image"
                                                      alt=""
                                                      srcset="https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-100x100.jpg 100w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-150x150.jpg 150w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-112x112.jpg 112w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-60x60.jpg 60w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-120x120.jpg 120w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-105x105.jpg 105w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-80x80.jpg 80w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-110x110.jpg 110w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-300x300.jpg 300w"
                                                      sizes="(max-width: 100px) 100vw, 100px" /><a
                                                      href="../how-to-increase-your-roi-through-scientific-sem-7/index.html"
                                                      class="overlay-box"><span class="icon fa fa-link"></span></a>
                                                </figure>
                                                <div class="text"><a
                                                      href="../how-to-increase-your-roi-through-scientific-sem-7/index.html">How
                                                      to increase your ROI through scientific SEM?</a></div>
                                                <div class="post-info">November 4, 2021</div>
                                             </article>


                                             <article class="post">
                                                <figure class="post-thumb"><img loading="lazy" decoding="async"
                                                      width="100" height="100"
                                                      src="../wp-content/uploads/2021/11/blog-list-1-100x100.jpg"
                                                      class="attachment-moko_100x100 size-moko_100x100 wp-post-image"
                                                      alt=""
                                                      srcset="https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-100x100.jpg 100w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-150x150.jpg 150w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-112x112.jpg 112w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-60x60.jpg 60w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-120x120.jpg 120w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-105x105.jpg 105w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-80x80.jpg 80w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-110x110.jpg 110w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/blog-list-1-300x300.jpg 300w"
                                                      sizes="(max-width: 100px) 100vw, 100px" /><a
                                                      href="../how-to-increase-your-roi-through-scientific-sem-6/index.html"
                                                      class="overlay-box"><span class="icon fa fa-link"></span></a>
                                                </figure>
                                                <div class="text"><a
                                                      href="../how-to-increase-your-roi-through-scientific-sem-6/index.html">How
                                                      to increase your ROI through scientific SEM?</a></div>
                                                <div class="post-info">November 4, 2021</div>
                                             </article>


                                          </div>
                                       </div>

                                    </div>
                                    <div id="moko_gallery_v2-2" class="widget sidebar-widget widget_moko_gallery_v2">
                                       <!-- Instagram Widget -->
                                       <div class="instagram-widget">
                                          <div class="sidebar-title">
                                             <h4>Gallery</h4>
                                          </div>
                                          <div class="widget-content">
                                             <div class="clearfix">

                                                <figure class="post-thumb"><img loading="lazy" decoding="async"
                                                      width="110" height="110"
                                                      src="../wp-content/uploads/2021/11/1-110x110.jpg"
                                                      class="attachment-moko_110x110 size-moko_110x110 wp-post-image"
                                                      alt=""
                                                      srcset="https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-110x110.jpg 110w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-150x150.jpg 150w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-300x300.jpg 300w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-112x112.jpg 112w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-60x60.jpg 60w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-120x120.jpg 120w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-105x105.jpg 105w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-80x80.jpg 80w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-100x100.jpg 100w"
                                                      sizes="(max-width: 110px) 100vw, 110px" /><a
                                                      href="../project/movie-recommendation-4/index.html"
                                                      class="overlay-box"><span class="icon fa fa-link"></span></a>
                                                </figure>
                                                <figure class="post-thumb"><img loading="lazy" decoding="async"
                                                      width="110" height="110"
                                                      src="../wp-content/uploads/2021/11/2-110x110.jpg"
                                                      class="attachment-moko_110x110 size-moko_110x110 wp-post-image"
                                                      alt=""
                                                      srcset="https://wp.themerange.net/moko/wp-content/uploads/2021/11/2-110x110.jpg 110w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/2-150x150.jpg 150w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/2-300x300.jpg 300w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/2-112x112.jpg 112w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/2-60x60.jpg 60w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/2-120x120.jpg 120w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/2-105x105.jpg 105w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/2-80x80.jpg 80w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/2-100x100.jpg 100w"
                                                      sizes="(max-width: 110px) 100vw, 110px" /><a
                                                      href="../project/customer-segmentation-3/index.html"
                                                      class="overlay-box"><span class="icon fa fa-link"></span></a>
                                                </figure>
                                                <figure class="post-thumb"><img loading="lazy" decoding="async"
                                                      width="110" height="110"
                                                      src="../wp-content/uploads/2021/11/1-110x110.jpg"
                                                      class="attachment-moko_110x110 size-moko_110x110 wp-post-image"
                                                      alt=""
                                                      srcset="https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-110x110.jpg 110w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-150x150.jpg 150w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-300x300.jpg 300w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-112x112.jpg 112w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-60x60.jpg 60w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-120x120.jpg 120w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-105x105.jpg 105w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-80x80.jpg 80w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/1-100x100.jpg 100w"
                                                      sizes="(max-width: 110px) 100vw, 110px" /><a
                                                      href="../project/movie-recommendation-3/index.html"
                                                      class="overlay-box"><span class="icon fa fa-link"></span></a>
                                                </figure>
                                                <figure class="post-thumb"><img loading="lazy" decoding="async"
                                                      width="110" height="110"
                                                      src="../wp-content/uploads/2021/11/6-110x110.jpg"
                                                      class="attachment-moko_110x110 size-moko_110x110 wp-post-image"
                                                      alt=""
                                                      srcset="https://wp.themerange.net/moko/wp-content/uploads/2021/11/6-110x110.jpg 110w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/6-150x150.jpg 150w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/6-300x300.jpg 300w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/6-112x112.jpg 112w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/6-60x60.jpg 60w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/6-120x120.jpg 120w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/6-105x105.jpg 105w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/6-80x80.jpg 80w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/6-100x100.jpg 100w"
                                                      sizes="(max-width: 110px) 100vw, 110px" /><a
                                                      href="../project/benefits-research-3/index.html"
                                                      class="overlay-box"><span class="icon fa fa-link"></span></a>
                                                </figure>
                                                <figure class="post-thumb"><img loading="lazy" decoding="async"
                                                      width="110" height="110"
                                                      src="../wp-content/uploads/2021/11/5-110x110.jpg"
                                                      class="attachment-moko_110x110 size-moko_110x110 wp-post-image"
                                                      alt=""
                                                      srcset="https://wp.themerange.net/moko/wp-content/uploads/2021/11/5-110x110.jpg 110w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/5-150x150.jpg 150w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/5-300x300.jpg 300w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/5-112x112.jpg 112w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/5-60x60.jpg 60w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/5-120x120.jpg 120w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/5-105x105.jpg 105w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/5-80x80.jpg 80w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/5-100x100.jpg 100w"
                                                      sizes="(max-width: 110px) 100vw, 110px" /><a
                                                      href="../project/data-scientist-3/index.html"
                                                      class="overlay-box"><span class="icon fa fa-link"></span></a>
                                                </figure>
                                                <figure class="post-thumb"><img loading="lazy" decoding="async"
                                                      width="110" height="110"
                                                      src="../wp-content/uploads/2021/11/4-110x110.jpg"
                                                      class="attachment-moko_110x110 size-moko_110x110 wp-post-image"
                                                      alt=""
                                                      srcset="https://wp.themerange.net/moko/wp-content/uploads/2021/11/4-110x110.jpg 110w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/4-150x150.jpg 150w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/4-300x300.jpg 300w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/4-112x112.jpg 112w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/4-60x60.jpg 60w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/4-120x120.jpg 120w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/4-105x105.jpg 105w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/4-80x80.jpg 80w, https://wp.themerange.net/moko/wp-content/uploads/2021/11/4-100x100.jpg 100w"
                                                      sizes="(max-width: 110px) 100vw, 110px" /><a
                                                      href="../project/detection-project-3/index.html"
                                                      class="overlay-box"><span class="icon fa fa-link"></span></a>
                                                </figure>

                                             </div>
                                          </div>
                                       </div>

                                    </div>
                                    <div id="moko_blog_author-2" class="widget sidebar-widget widget_moko_blog_author">
                                       <!-- Author Widget -->
                                       <div class="author-widget">
                                          <div class="widget-content" style="background-image: url("
                                             {{asset('frontend/themes/moko/assets/images/background/author-bg.jpg')}})">
                                             <div class="image">
                                                <img decoding="async"
                                                   src="../wp-content/themes/moko/assets/images/resource/author-7.jpg"
                                                   alt="Author Image" />
                                             </div>
                                             <div class="name">Pablo Villalpando</div>
                                             <div class="text">I got lucky because I never gave up the search. Are you
                                                quitting too soon? Or, are you willing to pursue luck with a vengeance?
                                             </div>
                                             <!-- Social Box -->
                                             <ul class="social-box">
                                                <li><a href="https://facebook.com/" class="fab fa-facebook-f"></a></li>

                                                <li><a href="https://twitter.com/" class="fab fa-twitter"></a></li>

                                                <li><a href="https://linkedin.com/" class="fab fa-linkedin-in"></a></li>

                                                <li><a href="https://instagram.com/" class="fab fa-instagram"></a></li>

                                                <li><a href="https://pinterest.com/" class="fab fa-pinterest-p"></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>

                                    </div>
                                    <div id="tag_cloud-2" class="widget sidebar-widget widget_tag_cloud">
                                       <div class="sidebar-title">
                                          <h4>Tags</h4>
                                       </div>
                                       <div class="tagcloud"><a href="../tag/agencyco/index.html"
                                             class="tag-cloud-link tag-link-30 tag-link-position-1"
                                             style="font-size: 8pt;" aria-label="Agencyco (25 items)">Agencyco</a>
                                          <a href="../tag/app/index.html"
                                             class="tag-cloud-link tag-link-31 tag-link-position-2"
                                             style="font-size: 8pt;" aria-label="App (25 items)">App</a>
                                          <a href="../tag/blue/index.html"
                                             class="tag-cloud-link tag-link-32 tag-link-position-3"
                                             style="font-size: 8pt;" aria-label="Blue (25 items)">Blue</a>
                                          <a href="../tag/gold/index.html"
                                             class="tag-cloud-link tag-link-33 tag-link-position-4"
                                             style="font-size: 8pt;" aria-label="Gold (25 items)">Gold</a>
                                          <a href="../tag/history/index.html"
                                             class="tag-cloud-link tag-link-34 tag-link-position-5"
                                             style="font-size: 8pt;" aria-label="History (25 items)">History</a>
                                       </div>
                                    </div>
                                 </aside>
                              </div> --}}

                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>

<div class="clearfix"></div>



</section>


@endsection
@extends('Fornt.master')

@section('title','details')

@section('body')



    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <header class="entry-header">
                    <h1 class="entry-title">Blog</h1>
                </header>
            </div>
        </div>
    </div>



    <div class="page-spacer clearfix">
        <div id="primary" class="content-area">
            <div class="container py-5">
                <div class="row">



                    <main id="main" class="site-main col-xs-12 col-sm-8 left-block">
                        <hr>



                                    <div class="col-sm-5   ">
                                        <div>
                                            <img src="{{asset($detail->image)}}" alt="" style="height: 280px; width: 300px">
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="text-center">


                                            <h3>{{$detail->title}}</h3>

                                        </div>

{{--                                        <div><h2></h2></div>--}}

                                        <div class="mt-10">

                                            <p class="text-muted">{{$detail->content}}</p>

                                        </div>
                                    </div>






                        <hr>






                    </main>




















{{--                    <div class="widget-area col-xs-12 col-sm-4 pull-right" id="secondary">--}}
{{--                        <aside class="widget widget_search">--}}
{{--                            <h3>Search bar</h3>--}}
{{--                            <form action="blog.html#" class="search-form" method="get">--}}
{{--                                <input type="search" title="Search for:" name="s" value="" placeholder="Search …" class="search-field">--}}
{{--                                <input type="submit" value="Search" class="search-submit btn btn-default">--}}
{{--                            </form>--}}
{{--                        </aside>--}}
{{--                        <aside class="widget widget_categories">--}}
{{--                            <h3 class="widget-title">Categories</h3>--}}
{{--                            <ul>--}}
{{--                                <li><a href="blog.html#">HTML5 and CSS3</a> (1) </li>--}}
{{--                                <li><a href="blog.html#">Java Script Development</a> (1) </li>--}}
{{--                                <li><a href="blog.html#">Music</a> (2) </li>--}}
{{--                                <li><a href="blog.html#">News</a> (2) </li>--}}
{{--                                <li><a href="blog.html#">Online Courses</a> (9) </li>--}}
{{--                                <li><a href="blog.html#">Web Development</a> (2) </li>--}}
{{--                            </ul>--}}
{{--                        </aside>--}}
{{--                        <aside class="widget recent_posts_widget">--}}
{{--                            <h3 class="widget-title">Recent Posts</h3>--}}
{{--                            <ul>--}}
{{--                                <li class="clearfix"> <img src="images/use_img/widget-thumb.jpg" alt="" />--}}
{{--                                    <div class="simi-co">--}}
{{--                                        <h5><a href="blog.html#">Can We Talk? A Real Conversation About Employee Performance</a></h5>--}}
{{--                                        <p class="meta"><a href="blog.html#">News</a></p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="clearfix"> <img src="images/use_img/widget-thumb.jpg" alt="" />--}}
{{--                                    <div class="simi-co">--}}
{{--                                        <h5><a href="blog.html#">Create A Professional Music Video For Songwriters/Musicians</a></h5>--}}
{{--                                        <p class="meta"><a href="blog.html#">Music</a></p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="clearfix"> <img src="images/use_img/widget-thumb.jpg" alt="" />--}}
{{--                                    <div class="simi-co">--}}
{{--                                        <h5><a href="blog.html#">Tricks and Tips for Adobe Photoshop CS6</a></h5>--}}
{{--                                        <p class="meta"><a href="blog.html#">Online Courses</a></p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </aside>--}}
{{--                        <aside class="widget widget_tag_cloud">--}}
{{--                            <h3 class="widget-title">Tags</h3>--}}
{{--                            <div class="tagcloud">--}}
{{--                                <a href="blog.html#">Adobe</a>--}}
{{--                                <a href="blog.html#">Courses</a>--}}
{{--                                <a href="blog.html#">Development</a>--}}
{{--                                <a href="blog.html">HTML5</a>--}}
{{--                                <a href="blog.html#">Lorem</a> <a href="blog.html#">Music</a>--}}
{{--                                <a href="blog.html#">Photoshop</a>--}}
{{--                            </div>--}}
{{--                        </aside>--}}
{{--                        <aside class="widget widget_archive">--}}
{{--                            <h3 class="widget-title">Archives</h3>--}}
{{--                            <select onchange="" name="archive">--}}
{{--                                <option value="">Select Month</option>--}}
{{--                                <option value="#"> March 2016 </option>--}}
{{--                            </select>--}}
{{--                        </aside>--}}
{{--                    </div>--}}

                </div>
            </div>
        </div>
    </div>




    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto mt-4">
                    <div class="card-header">
                        <h3>What's on your minds</h3>
                    </div>
                    <div class="card-body">
                        <form action="/html/tags/html_form_tag_action.cfm" method="post">
                            <div>

                                <div class="over">
                                    <script>
                                        var GU_comment_box_id = "kzfrdq3p";
                                        var GU_comment_box_theme = "style";
                                        var GU_comment_box_pos = "top";
                                        var GU_comment_box_mode = "inline";
                                        var GU_comment_box_server = "minichat.first-jump.com";
                                    </script>
                                    <script src="http://minichat.first-jump.com/i/comm/comment_box_code.js"></script>
                                </div>
                                <hr>

                            </div>




                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

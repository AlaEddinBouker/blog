@extends('layouts.template')

@section('content')
    <div id="Header_wrapper" class="bg-parallax" data-enllax-ratio="0.3">
        <header id="Header"></header>
        <div id="Subheader" style="padding:116px 0;">
            <div class="container">
                <div class="column one">
                    <h1 class="title">Parti</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="section section-filters">
                    <div class="section_wrapper clearfix">
                        <div id="Filters" class="column one">
                            <ul class="filters_buttons">
                                <li class="label">

                                </li>
                            </ul>
                            <div class="filters_wrapper">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="section">
                    <div class="section_wrapper clearfix">
                        <div class="column one column_blog">
                            <div class="blog_wrapper isotope_wrapper">
                                <div class="posts_group lm_wrapper masonry col-3 isotope">
                                    @foreach ($partis as $parti)
                                        <div class="post-item isotope-item clearfix author-admin post-42 post type-post status-publish format-standard has-post-thumbnail category-aliquam category-lorem">
                                            <div class="image_frame post-photo-wrapper scale-with-grid image">
                                                <div class="image_wrapper">
                                                    <a href="/partis/{!! $parti->id !!}"><img src="/storage/{!! $parti->thumnail !!}" class="scale-with-grid wp-post-image" style="height:25% !important; width:100% !important;" /></a>
                                                </div>
                                            </div>
                                            <div class="post-desc-wrapper">
                                                <div class="post-desc">
                                                    <div class="post-head">
                                                        <div class="post-meta clearfix">
                                                        </div>
                                                    </div>
                                                    <div class="post-title">
                                                        <h2 class="entry-title"><a href="/partis/{!! $parti->id !!}">{!! $parti->name !!}</a></h2>
                                                    </div>
                                                    <div class="post-excerpt"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




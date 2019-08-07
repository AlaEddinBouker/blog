@extends('layouts.template')
@section('content')

<div id="Header_wrapper" class="bg-parallax" data-enllax-ratio="0.3">
            <header id="Header"></header>
        </div>
        <div id="Intro" class=" parallax" data-parallax="3d">
            <img class="mfn-parallax" src="/storage/{!! $partis->cover !!}" alt="parallax background" style="opacity:0">
            <div class="intro-inner">
                <h1 class="intro-title">{!! $partis->name !!}</h1>

            </div>
            <div class="intro-next">
                <i class="icon-down-open-big"></i>
            </div>
        </div>
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="no-title post type-post format-standard has-post-thumbnail">

                        <div class="post-wrapper-content">
                            <div class="section mcb-section" style="padding-top:90px; padding-bottom:50px; background-color:#f4eff1">
                                <div class="section_wrapper mcb-section-inner">
                                    <div class="wrap mcb-wrap one valign-top clearfix">
                                        <div class="mcb-wrap-inner">
											{!! $partis->content !!}	
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection




@extends('layouts.main')

@php($index = 0)


@section('slider1')
    <ul>
        @for (; $index < 3; $index++)
            <li data-transition="fade">
                <img src="{{ asset('storage/' . $locations[$index]->image) }}"  alt="" width="1920" height="888" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="15" 
                    data-y="top" data-voffset="260" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="700">
                    <div class="slide-content-box">
                        <h1>{{ $locations[$index]->name }}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</h1>
                        <h3>{{ $locations[$index]->created_at->format('d - m - Y') }}</h3>
                        <p style="white-space: pre-wrap;">{{ $locations[$index]->description }}</p>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="15" 
                    data-y="top" data-voffset="480" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2300">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn" href="#">read more</a>     
                        </div>
                    </div>
                </div>
                <div class="tp-caption tp-resizeme" 
                    data-x="left" data-hoffset="200" 
                    data-y="top" data-voffset="480" 
                    data-transform_idle="o:1;"                         
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"                     
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    data-start="2600">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn style-3" href="cause.html">Get Involved</a>     
                        </div>
                    </div>
                </div>
            </li>
            
        @endfor
    </ul>
@endsection

@section('show1')
    <div class="row filter-layout">
        @for(; $index < 7; $index++)
        <article class="col-md-3 col-sm-6 col-xs-12 filter-item Wild-Animals Pollution Water">
            <div class="item">
                <div class="img-box">
                    <img src="{{ asset('storage/' . $locations[$index]->image) }}" alt="">
                    <div class="overlay">
                        <div class="inner-box">
                            <div class="content-box">
                                <a data-group="1" href="{{ asset('storage/' . $locations[$index]->image) }}" class="img-popup"><i class="fa fa-search-plus"></i></a>
                                <a href="single-gallery.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content center">
                    <h4>{{ $locations[$index]->name }}</h4>
                    <p color="white">{{ $locations[$index]->description }}</p>
                </div>
            </div>
        </article> 
        @endfor
    </div>
@endsection

@section('slider2')
    @for(;$index < $locations->count(); $index++)
    <div class="item clearfix">
        <figure class="img-box">
            <img src="{{ asset('storage/' . $locations[$index]->image) }}" alt="">
            <div class="overlay"><div class="inner-box"><div class="content-box"><button class="thm-btn style-2 donate-box-btn">donate now</button></div></div></div>
        </figure>
        
        <div class="content">
            
            <div class="text center">
                <a href="#"><h4 class="title">{{ $locations[$index]->name }}</h4></a>
                <p>{{ $locations[$index]->description }}</p>               
            </div>
            <div class="progress-box">
                <div class="bar">
                    <div class="bar-inner animated-bar" data-percent="48%"><div class="count-text">48%</div></div>
                </div>
            </div>
            <div class="donate clearfix">
                <div class="donate float_left"><span>Goal: $54000 </span></div>
                <div class="donate float_right">Raised: $24000</div>
            </div>
            
        </div>                        
                
    </div>
    @endfor
@endsection
@extends('layouts.app')

@section('content')
    <div class="body">

        <div role="main" class="main">            

            <div class="container container-lg">
                <br>    <br>    
                <div class="row">
                    <div class="col">

                        <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">

                            <ul class="nav nav-pills sort-source sort-source-style-3" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'packery', 'filter': '*'}">
                                <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
                                <li class="nav-item" data-option-value=".spk"><a class="nav-link text-1 text-uppercase" href="#">SPK</a></li>
                                <li class="nav-item" data-option-value=".crm"><a class="nav-link text-1 text-uppercase" href="#">CRM</a></li>
                                <li class="nav-item" data-option-value=".scm"><a class="nav-link text-1 text-uppercase" href="#">SCM</a></li>
                                <li class="nav-item" data-option-value=".si"><a class="nav-link text-1 text-uppercase" href="#">SI</a></li>
                            </ul>

                            <div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
                                <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                                    
                                    <div class="col-sm-6 col-lg-6 isotope-item spk">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{asset('tmp/img/projects/project-portfolio-1-1.jpg')}}" class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span class="thumb-info-inner line-height-1 text-4 font-weight-bold">The Desk</span>
                                                            <span class="thumb-info-type opacity-6">SPK</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-6 isotope-item si">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{asset('tmp/img/projects/project-portfolio-1-2.jpg')}}" class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">Porto Watch</span>
                                                            <span class="thumb-info-type opacity-6 text-dark">si</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3 isotope-item scm">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{ asset('tmp/img/projects/project-portfolio-1-3.jpg') }}" class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span class="thumb-info-inner line-height-1 text-4 font-weight-bold">Black Keyboard</span>
                                                            <span class="thumb-info-type opacity-6">scm</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3 isotope-item crm">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{ asset('tmp/img/projects/project-portfolio-1-4.jpg') }}" class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">Blue Tag</span>
                                                            <span class="thumb-info-type opacity-6 text-dark">Project Type</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>                                  

                                    <div class="col-sm-6 col-lg-3 isotope-item scm">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{ asset('tmp/img/projects/project-portfolio-1-5.jpg') }}" class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">White Car</span>
                                                            <span class="thumb-info-type opacity-6 text-dark">scm</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-6 isotope-item crm">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{ asset('tmp/img/projects/project-portfolio-1-6.jpg') }}" class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">Porto Card</span>
                                                            <span class="thumb-info-type opacity-6 text-dark">crm</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3 isotope-item scm">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{ asset('tmp/img/projects/project-portfolio-1-7.jpg') }}" class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span class="thumb-info-inner line-height-1 text-4 font-weight-bold">Bicycle Trends</span>
                                                            <span class="thumb-info-type opacity-6">scm</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-6 isotope-item si">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{ asset('tmp/img/projects/project-portfolio-1-8.jpg') }}" class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">Clean Way</span>
                                                            <span class="thumb-info-type opacity-6 text-dark">si</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-6 isotope-item spk">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{ asset('tmp/img/projects/project-portfolio-1-9.jpg') }}" class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">Corporate Designs</span>
                                                            <span class="thumb-info-type opacity-6 text-dark">SPK</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-6 isotope-item spk">
                                        <div class="portfolio-item">
                                            <a href="portfolio-single-wide-slider.html">
                                                <span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                    <span class="thumb-info-wrapper">
                                                        <img src="{{ asset('tmp/img/projects/project-portfolio-1-10.jpg') }}" class="img-fluid" alt="">
                                                        <span class="thumb-info-title bg-transparent p-4">
                                                            <span class="thumb-info-inner line-height-1 text-4 font-weight-bold text-dark">Mobile eCommerce</span>
                                                            <span class="thumb-info-type opacity-6 text-dark">SPK</span>
                                                        </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
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

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
                                    <?php foreach ($portofolio as $key => $value) { ?>
                                        <div class="col-sm-6 col-lg-6 isotope-item spk">
                                            <div class="portfolio-item">
                                                <a href="{{ $value->link }}">
                                                    <span class="thumb-info thumb-info-no-borders thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                                        <span class="thumb-info-wrapper">
                                                            <img src="{{asset('tmp/img/projects')}}/{{ $value->image }}" class="img-fluid" alt="">
                                                            <span class="thumb-info-title bg-transparent p-4">
                                                                <span class="thumb-info-inner line-height-1 text-4 font-weight-bold {{ $value->font_type }}">{{ $value->title }}</span>
                                                                <span class="thumb-info-type opacity-6 {{ $value->font_type }}">SPK</span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection        

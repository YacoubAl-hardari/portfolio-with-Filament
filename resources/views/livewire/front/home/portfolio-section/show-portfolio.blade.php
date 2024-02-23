<div>
  

    @if($Categories->count() > 0  && $Projects->count() > 0)
            
    <section class="mh-portfolio" id="mh-portfolio">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title col-sm-12">
                    <h3>{{ trans('ar.portfolio') }}</h3>
                </div>
                <div class="part col-sm-12">
                    <div class="portfolio-nav col-sm-12" id="filter-button">
                        <ul>

                            <li data-filter="*" class="current"> <span>جميع الفئات</span></li>
                            @foreach ($Categories as $Categorie)
                            <li data-filter=".{{ $Categorie->name }}"> <span>{{ $Categorie->name }}</span></li>
                                
                            @endforeach
                        </ul>
                    </div>
                    <div class="mh-project-gallery col-sm-12" id="project-gallery">
                        <div class="portfolioContainer row">
                            @php $counters = 5621565; @endphp
                            @foreach ($Projects as $Project)
                            @php $counters++; @endphp
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 {{ $Project->categories->name }}">
                                <figure>
                                    <img src="{{ asset('storage/'.$Project->images) }}" alt="{{ $Project->name }}">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">{{ $Project->name }}</h5>
                                        <span class="sub-title">{{ $Project->categories->name }}</span>
                                        <a data-fancybox data-src="#{{$counters }}"></a>
                                    </figcaption>
                                </figure>
                            </div>
                                
                            @endforeach
                            
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .grid .project-gallery -->
                </div> <!-- End: .part -->
            </div> <!-- End: .row -->
        </div>
    </section>
 
    @php $counter = 5621565; @endphp
    @foreach ($Projects as $Project)
    @php $counter++; @endphp
    <div class="mh-portfolio-modal" id="{{ $counter }}">
        <div class="container">
            <div class="row mh-portfolio-modal-inner">
                <div class="col-sm-5">
                    <h2>{{ $Project->title }}</h2>
                    
                    <div>
                        {{ $Project->description }}
                    </div>
                         
                    @if($Project->tags)
                    <div class="mh-about-tag">
                        <ul>
                            @foreach($Project->tags as $tag)
                            <li><span>{{ $tag }}</span></li>
                                
                            @endforeach
                        </ul>
                    </div>
                        
                    @endif
                    <a href="{{ $Project->url }}" class="btn btn-fill">{{ trans('ar.demo') }}</a>
                </div>
                <div class="col-sm-7">
                    <div class="mh-portfolio-modal-img">
                        <img src="{{ asset('storage/'.$Project->images) }}" alt="{{ $Project->title }}" class="img-fluid">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
    
</div>

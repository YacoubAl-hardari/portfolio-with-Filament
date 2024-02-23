<div>
  

    @if($Posts->count() > 0)
    <section class="mh-blog" id="mh-blog">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 section-title">
                    <h3>{{ trans('ar.blog') }}</h3>
                </div>

                @foreach ($Posts as  $Post)
                <div class="col-sm-12 col-md-4">
                     <div class="mh-blog-item dark-bg">
                        <img src="{{ asset('storage/'.$Post->images) }}" alt="{{ $Post->title }}" class="img-fluid">
                        <div class="blog-inner">
                            <h2><a href="{{ route('ShowPostDetails',$Post->url)}}">{{ $Post->title }}</a></h2>
                            <div class="mh-blog-post-info">
                                <ul>
                                    <li><a href="{{ route('ShowPostDetails',$Post->url)}}">{{ $Post->date  }}</a><strong></strong></li>
                                    <li><a href="{{ route('ShowPostDetails',$Post->url)}}">{{ $Post->users->name  }}</a><strong>{{ trans('ar.by') }}</strong></li>
                                </ul>
                            </div>
                            <p>
                                {{ $Post->samll_description  }}
                            </p>
                            <a href="{{ route('ShowPostDetails',$Post->url)}} ">{{ trans('ar.readMore') }}</a>
                        </div>
                    </div>
                </div>
                    
                @endforeach
             
            </div>
        </div>
    </section>        
    @endif
    

</div>

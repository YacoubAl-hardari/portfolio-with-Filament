<div>
   
    
    @if($AboutMe)
            
      
    <section class="mh-about" id="mh-about">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 col-md-6">
                    <div class="mh-about-img shadow-2">
                        <img src="{{ asset('storage/'.$AboutMe->image) }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-about-inner">
                        <h2>{{ $AboutMe->title }}</h2>
                        <p>
                            {{ $AboutMe->description }}
                        </p>
                        <div class="mh-about-tag">
                            <ul>
                                @if($AboutMe->tags)
                                @foreach ($AboutMe->tags as $tag )
                                <li><span>{{ $tag }}</span></li>
                                    
                                @endforeach
                                    
                                @endif
                            </ul>
                        </div>
                        <a href=" {{ asset('storage/'.$AboutMe->cv) }}" download=""  class="btn btn-fill"> {{ trans('ar.Download_CV') }}<i class=" mr-2 fa fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

</div>

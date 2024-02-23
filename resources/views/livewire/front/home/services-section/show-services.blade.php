<div>
   
    
    @if($Services->count() > 0)
    <section class="mh-service">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 text-center section-title">
                    <h2>{{ trans('ar.My_services') }}</h2>
                </div>
                    
                @foreach ($Services as $Service)
                <div class="col-sm-4">
                    <div class="mh-service-item shadow-1 dark-bg">
                        <img src="{{ asset('storage/'. $Service->image) }}" alt="{{ $Service->title }}" width="100">
                        <h3>{{ $Service->title }}</h3>
                        <p>
                            {{ $Service->small_description }}
                        </p>
                    </div>
                </div>
                    
                @endforeach
                
                
                
            </div>
        </div>
    </section>       
    
    @endif

</div>

<div>
   
    

    
    @if($Clients->count() > 0)
            
      
    <section class="mh-testimonial" id="mh-testimonial">
        <div class="home-v-img">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title">
                        <h3>{{ trans('ar.Customer_reviews') }}</h3>
                    </div>
                    <div class="col-sm-12" id="mh-client-review">
                        @foreach ($Clients as $Client )
                        <div class="each-client-item">
                            <div class="mh-client-item dark-bg black-shadow-1">
                                <img src="{{ asset('storage/'.$Client->image) }}" alt="{{ $Client->name }}" class="img-fluid w-50">
                                <p>{{ $Client->commnet }}</p>
                                <h4>{{ $Client->name }}</h4>
                                <span>{{ $Client->client_job }}</span>
                            </div>
                        </div>
                            
                        @endforeach
                     
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endif
    



</div>

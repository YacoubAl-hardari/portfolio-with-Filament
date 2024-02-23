<div>
   
    @if($Hero)
            
    <section class="mh-home" id="mh-home">
        <div class="home-ovimg">
            <div class="container">
                <div class="row xs-column-reverse section-separator vertical-middle-content home-padding">
                    <div class="col-sm-6">
                        <div class="mh-header-info">
                            <div class="mh-promo">
                                <span>{{$Hero->title}}</span>
                            </div>
                            
                            <h2>{{$Hero->name}}</h2>
                            <h4>{{$Hero->job}}</h4>
                            
                            <ul>
                                <li><i class="fa fa-envelope"></i><a class="mx-2" href="mailto:{{ $SoicalMedais->email }}">{{ $SoicalMedais->email }}</a></li>
                                <li><i class="fa fa-phone"></i><a class="mx-2" href="callto:{{ $SoicalMedais->phone }}">{{ $SoicalMedais->phone }}</a></li>
                                <li><i class="fa fa-map-marker"></i><address class="mx-2">{{ $SoicalMedais->location }}</address></li>
                            </ul>
                            
                            <ul class="social-icon">
                                @if ($SoicalMedais->social_links)
                                @foreach($SoicalMedais->social_links as $social_link)
                                <li><a class="mx-1" href="{{ $social_link['link'] }}"><img src="{{ asset('storage/'.$social_link['icon']) }}" alt="{{$Hero->title}}"></a></li>
                                    
                                @endforeach
                                    
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="hero-img">
                            <div class="img-border">
                                <img src="{{ asset('storage/'.$Hero->image) }}" alt="{{$Hero->name}}"  class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    @endif


</div>

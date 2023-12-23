@php
    $SEO = \App\Models\Settings::latest()->first();
@endphp

@section('meta_keywords')
@if($SEO->meta_keywords)
@foreach($SEO->meta_keywords as $keywords)
   {{$keywords}},
@endforeach
    
@endif
@endsection
@section('meta_title')
{{$SEO->meta_title}}    
@endsection
@section('meta_description')
{{$SEO->meta_description}}    
@endsection
@section('meta_image')
{{asset('storage/'.$SEO->meta_image)}} 
@endsection
@section('title')
{{$SEO->title}} 
@endsection

<div>
 
        
        <!--
        ===================
            HOME 
        ===================
        -->
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
        
        <!--
        ==================
            ABOUT
        =================
        -->
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
        <!--
        ===================
            SERVICES 
        ===================
        -->
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
        <!--
        ===================
            SKILLS 
        ===================
        -->
        <section class="mh-skills" id="mh-skills">
            <div class="container">
                <div class="row section-separator">
                    <div class="section-title text-center col-sm-12">
                        <!--<h2>Skills</h2>-->
                    </div>
                    @if($SkillsTeches)
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-skills-inner">
                            <div class="mh-professional-skill">
                                <h3>{{ trans('ar.Technical_skills') }}</h3>
                                <div class="each-skills">
                                    @foreach ($SkillsTeches as $SkillsTeche)
                                    <div class="candidatos">
                                        <div class="parcial">
                                            <div class="info">
                                                <div class="nome">{{ $SkillsTeche->title }}</div>
                                                <div class="percentagem-num">{{ $SkillsTeche->percentage }}</div>
                                            </div>
                                            <div class="progressBar">
                                                <div class="percentagem" style="width: {{ $SkillsTeche->percentage }}% ;"></div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    @endforeach
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    @endif
                    @if($SkillsSoicals->count() > 0)
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-professional-skills">
                            <h3>{{ trans('ar.Professional_skills') }}</h3>
                            <ul class="mh-professional-progress">
                                @foreach($SkillsSoicals as $SkillsSoical)
                                <li>
                                    <div class="mh-progress mh-progress-circle" data-progress="{{ $SkillsSoical->percentage }}"></div>
                                    <div class="pr-skill-name">{{ $SkillsSoical->title }}</div>
                                </li>
                                    
                                @endforeach
                            </ul>
                        </div>
                    </div>
                        
                    @endif
                </div>
            </div>
        </section>
        
        <!--
        ===================
            EXPERIENCES 
        ===================
        -->
        <section class="mh-experince" id="mh-experience">
            <div class="bolor-overlay">
                <div class="container">
                    <div class="row section-separator">
                        @if($Educations->count() > 0)
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-education">
                                 <h3>{{ trans('ar.education') }}</h3>
                                <div class="mh-education-deatils">
                                    @foreach ($Educations as $Education)
                                    <!-- Education Institutes-->
                                    <div class="mh-education-item dark-bg">
                                        <h4>{{ $Education->title }}<a href="#" class="mx-2">{{ $Education->educationName }}</a></h4>
                                        <div class="mh-eduyear">{{ $Education->date }}</div>
                                        <p>
                                            {{ $Education->small_desctiption }}
                                        </p>
                                    </div>                                
                                    <!-- Education Institutes-->
                                        
                                    @endforeach
                                  
                                </div>
                            </div>
                        </div>
                            
                        @endif

                        @if($WorkExperiences->count() > 0)
                        <div class="col-sm-12 col-md-6">
                            <div class="mh-work">
                                 <h3>{{ trans('ar.work_experience') }}</h3>
                                <div class="mh-experience-deatils">
                                    @foreach ($WorkExperiences as $WorkExperience)
                                    <!-- Education Institutes-->
                                    <div class="mh-work-item dark-bg">
                                        <h4>{{ $WorkExperience->title }}<a href="#">{{ $WorkExperience->experienceName }}</a></h4>
                                        <div class="mh-eduyear">{{ $WorkExperience->date }}</div>
                                        <div>
                                            {!!  $WorkExperience->small_desctiption !!}
                                        </div>
                                    </div>                                
                                    <!-- Education Institutes-->
                                        
                                    @endforeach
                                   
                                </div>
                            </div>
                        </div>
                            
                        @endif
                    </div>
                </div>
            </div>
        </section>
        
        <!--
        ===================
            PORTFOLIO 
        ===================
        -->
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
        <!--
        ===================
            BLOG 
        ===================
        -->
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
                                <h2><a href="{{ $Post->url  }}">{{ $Post->title }}</a></h2>
                                <div class="mh-blog-post-info">
                                    <ul>
                                        <li><a href="#">{{ $Post->date  }}</a><strong>بعد على</strong></li>
                                        <li><a href="#">{{ $Post->users->name  }}</a><strong>بواسطة</strong></li>
                                    </ul>
                                </div>
                                <p>
                                    {{ $Post->samll_description  }}
                                </p>
                                <a href="{{ $Post->url  }}">{{ trans('ar.readMore') }}</a>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                 
                </div>
            </div>
        </section>        
        @endif
        <!--
        ===================
           TESTIMONIAL 
        ===================
        -->

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

@php
    $SEO = \App\Models\Settings::latest()->first();
@endphp

@section('meta_keywords')
@if(isset($SEO->meta_keywords))
@foreach($SEO->meta_keywords as $keywords)
   {{$keywords}},
@endforeach
    
@endif
@endsection
@section('meta_title')
@if(isset($SEO->meta_title))
{{$SEO->meta_title}}  

@endif
@endsection
@section('meta_description')
@if(isset($SEO->meta_description))
{{$SEO->meta_description}}    
@endif
@endsection
@section('meta_image')
@if(isset($SEO->meta_image))
    
{{asset('storage/'.$SEO->meta_image)}} 
@endif
@endsection
@section('title')
@if(isset($SEO->title))
{{$SEO->title}} 
    
@endif
@endsection

<div>
 
        
        <!--  ===================  HOME  ===================  -->
        <livewire:front.home.hero-section.show-hero>
            
        <!-- ================== ABOUT  ================= -->
        <livewire:front.home.about-section.show-about-us>
            
        <!-- ==================== SERVICES  ===================-->
        <livewire:front.home.services-section.show-services>
                
        <!-- =================== SKILLS  =================== -->
        <livewire:front.home.skills-section.show-skills>
      
        
        <!-- ===================  EXPERIENCES  =================== -->
        <livewire:front.home.experince-section.show-experince>

        <!-- =================== PORTFOLIO  ===================  -->
        <livewire:front.home.portfolio-section.show-portfolio>
                
        <!-- ===================   BLOG ===================  -->
        <livewire:front.home.blog-section.show-blogs>
                    
        <!-- =================== TESTIMONIAL  =================== -->
        <livewire:front.home.client-section.show-clients>
        <!-- =================== Footer  =================== -->
        <livewire:front.home.flooer-section.show-flooer>
        
    
</div>

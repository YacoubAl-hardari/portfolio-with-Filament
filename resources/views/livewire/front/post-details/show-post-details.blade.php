<div>
  

    <section class="mh-home image-bg home-2-img" id="mh-home">
        <div class="img-foverlay img-color-overlay">
            <div class="container">
                <div class="row section-separator">
                    <div class="mh-page-title text-center col-sm-12">
                        <h2>
                            {{ $post->name }}
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="mh-blog">
        <div class="container">
            <div class="row section-separator">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="mh-blog-item dark-bg blog-single">
                                <img src="{{ asset('storage/'.$post->images) }}" alt=" {{ $post->name }}" class="img-fluid " >
                                <div class="blog-inner">
                                    <h2><a href="#">  {{ $post->name }}</a></h2>
                                    <div class="mh-blog-post-info">
                                        <ul>
                                            <li><strong>Post On</strong><a href="#">  {{ $post->date }}</a></li>
                                            <li><strong>By</strong><a href="#">  {{ $post->users->name }}</a></li>
                                        </ul>
                                    </div>
                                    {!! $post->long_description !!}
                                </div>
                            </div>
                        </div>
                     
                      
                    </div>
                </div>
                
                
         
                
            </div>
        </div>
    </section>   

    

</div>

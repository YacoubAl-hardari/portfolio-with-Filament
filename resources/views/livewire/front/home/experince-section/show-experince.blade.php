<div>
  
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
    
</div>

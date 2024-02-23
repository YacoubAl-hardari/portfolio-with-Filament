<div>
  
    
    <section class="mh-skills" id="mh-skills">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title text-center col-sm-12">
                    <!--<h2>Skills</h2>-->
                </div>
                @if(isset($SkillsTeches))
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

</div>

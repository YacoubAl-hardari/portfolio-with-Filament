<div>
    
    
    <footer class="mh-footer" id="mh-contact">
        <div class="map-image image-bg">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title">
                        <h3>{{ trans('ar.contact_me') }}</h3>
                    </div>
                    <div class="col-sm-12 mh-footer-address">
                        <div class="row">
                           @foreach($ContactUs as $ContactU)
                           <div class="col-sm-12 col-md-4">
                               <div class="mh-address-footer-item dark-bg shadow-1">
                                   <div class="each-icon">
                                      <img src="{{ asset('storage/'.$ContactU->image) }}" alt="{{ $ContactU->name }}" width="50">
                                   </div>
                                   <div class="each-info">
                                       <h4>{{ $ContactU->name }}</h4>
                                       @if($ContactU->data)
                                       @foreach($ContactU->data as $value)
                                       <b>
                                         {{ $value['name'] }} <br>
                                       </b>
                                        
                                       @endforeach
                                        
                                       @endif
                                   </div>
                               </div>
                           </div>
                            
                           @endforeach
                         
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <form id="contactForm" class="single-form quate-form wow fadeInUp" data-toggle="validator" wire:submit.prevent="submitForm">
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <input wire:model.defer="name" class="contact-name form-control" id="name" type="text" placeholder="{{ trans('ar.name') }}" required>
                                    @error('name') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input wire:model.defer="last_name" class="contact-email form-control" id="L_name" type="text" placeholder="{{ trans('ar.lastName') }}" required>
                                    @error('last_name') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-sm-12">
                                    <input wire:model.defer="email" class="contact-subject form-control" id="email" type="email" placeholder="{{ trans('ar.email') }}" required>
                                    @error('email') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-sm-12">
                                    <textarea wire:model.defer="message" class="contact-message" id="message" rows="6" placeholder="{{ trans('ar.Message') }}" required></textarea>
                                    @error('message') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <!-- Subject Button -->
                                <div class="btn-form col-sm-12">
                                    <button type="submit" class="btn btn-fill btn-block" id="form-submit">{{ trans('ar.sendMessage') }}</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-map">
                            <div id="mh-map" class="shadow-1"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 mh-copyright">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="text-right text-xs-center">
                                    <p>جميع الحقوق محفوظة Yacoub Al-haidari @ 2023</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                
                                <ul class="social-icon">
                                    @foreach($SoicalMedais as $social_link)
                                    @if ($social_link->social_links)
                                    @foreach($social_link->social_links as $social_link)
                                    <li><a class="mx-1" href="{{ $social_link['link'] }}"><img src="{{ asset('storage/'.$social_link['icon']) }}" alt="logo social medai"></a></li>
                                        
                                    @endforeach
                                    @endif
                                    @endforeach
                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>   


</div>

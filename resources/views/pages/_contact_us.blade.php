<?php
   $settings = getSetting();
   $tabindex = 1;
   ?>
   <style>
      button.btn.btn-info.btn-lg {
         border-radius: 3px;
         padding: 9px 0px;
         text-transform: uppercase;
         font-weight: 500;
         outline: none !important;
         box-shadow: none !important;
         background: #ed6b4d !important;
         border: none !important;
         font-size: 15px;
         letter-spacing: 1px;
         transition: all 0.3s ease;
         -webkit-transition: all 0.3s ease;
         -moz-transition: all 0.3s ease;
         -ms-transition: all 0.3s ease;
         -o-transition: all 0.3s ease;
         min-width: 200px;
         color: #fff;
      }
      .form-control {
         background: transparent !important;
         border-radius: 0px;
         border: none !important;
         border-bottom: 1px solid #ddd !important;
         outline: none !important;
         box-shadow: none !important;
      }
   </style>
<div class="page-content py-md-3">
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-12">
         <div class="text-center">
            <h4 class="text-center contact-section-title">{{ __('Get In Touch')}}</h2>
         </div>
         <form method="POST" action="{{ route('contact.post') }}" class="form-horizontal" id="contact-form" enctype="multipart/form-data">
            <div class="">
               @csrf
               <div class="row">
                  <div class="col-md-4 col-12">
                     <div class="form-group ">
                        <div class="controls mb-md-4">
                           <input class="form-control" id="name"  placeholder="{{ __('Your Name')}}" tabindex="{{ $tabindex++ }}" name="name" type="text" required>
                           @if($errors->has('name'))
                           <span class="help-block text-danger">{{ $errors->first('name') }}</span>
                           @endif
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-12">
                     <div class="form-group ">
                        <div class="controls">
                           <input class="form-control" id="email"  placeholder="info@example.com" tabindex="{{ $tabindex++ }}" name="email" type="email" required>
                           @if($errors->has('email'))
                           <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                           @endif
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-12">
                     <div class="form-group ">
                        <div class="controls">
                           <input class="form-control" id="phone_no"  placeholder="{{ __('Phone Number')}}" tabindex="{{ $tabindex++ }}" name="phone_no" type="text" required>
                           @if($errors->has('phone_no'))
                           <span class="help-block text-danger">{{ $errors->first('phone_no') }}</span>
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row mb-2">
                  <div class="col-md-12">
                     <div class="form-group">
                        <div class="controls">
                           <input class="form-control" id="subject" placeholder="{{ __('Your subject')}}" tabindex="{{ $tabindex++ }}" name="subject" type="text" aria-invalid="false" required>
                           @if($errors->has('subject'))
                           <span class="help-block text-danger">{{ $errors->first('subject') }}</span>
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="form-group ">
                        <div class="controls">
                           <textarea class="form-control" id="your_message" placeholder="{{ __('Your message here')}}" tabindex="{{ $tabindex++ }}" cols="10" rows="5" name="your_message" required></textarea>
                           @if($errors->has('your_message'))
                           <span class="help-block text-danger">{{ $errors->first('your_message') }}</span>
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row pt-3">
                <div class="text-center col-12 mt-6">
                    <button type="submit" class="btn btn-info btn-lg">
                      <span>{{ __('SUBMIT')}}</span> <i class="fa fa-arrow-right"></i>
                    </button>
                 </div>
               </div>
         </form>
         </div>
      </div>
   </div>
</div>

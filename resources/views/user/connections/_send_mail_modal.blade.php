   <!-- Contact Modal -->
   <div class="contact_modal modal fade" id="connectMail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">
                <form action="{{route('user.connection.send-mail',$row->id)}}" method="post">
                    @csrf
                    <input type="hidden" name="connection_id" id="connection_id" value="{{$row->id}}" />
                    <div class="mb-3">
                        <label for="">{{ __('Recepients') }} <span class="text-danger">*</span></label>
                        <input type="email" name="email" id="email" value="{{ $row->email }}" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" required tabindex="{{$tabindex++}}">
                        @if($errors->has('email'))
                        <span class="help-block text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="subject">{{ __('Subject') }} <span class="text-danger">*</span></label>
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}" class="form-control @error('subject') is-invalid @enderror" placeholder="{{ __('Subject') }}" required tabindex="{{$tabindex++}}">
                        @if($errors->has('subject'))
                        <span class="help-block text-danger">{{ $errors->first('subject') }}</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="message">{{ __('Message') }}  <span class="text-danger">*</span></label>
                        <textarea name="message" id="message" cols="30" rows="5" value="{{ old('message') }}" class="form-control @error('message') is-invalid @enderror" placeholder="{{ __('Message') }}" tabindex="{{$tabindex++}}"></textarea>
                        @if($errors->has('message'))
                        <span class="help-block text-danger">{{ $errors->first('message') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Send Message') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>

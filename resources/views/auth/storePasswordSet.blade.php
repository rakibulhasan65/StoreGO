@extends('layouts.auth')


@section('content')
    <div class="card">
        @if (session('status'))
            <div class="mb-4 font-medium text-lg text-green-600 text-danger">
                {{ __('Email SMTP settings does not configured so please contact to your site admin.') }}
            </div>
        @endif
        <div class="row align-items-center">
            <div class="col-xl-6">
                <form method="POST" action="{{ route('storePasswordSet') }}" class="needs-validation" novalidate="">
                    @csrf
                    <div class="card-body">
                        <div class="">
                            <h2 class="mb-3 f-w-600">{{ __('Store Password Form') }}</h2>
                        </div>
                        <div class="">



                            <div class="form-group mb-3">
                                <label class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            </div>


                            <div class="form-group">
                                <label class="form-label">{{__('Confirm password')}}</label>
                                <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

                            </div>

<div class="d-grid">
    <button class="btn btn-primary btn-block mt-2 text-white">Save</button>
</div>
                        </div>

                    </div>
            </div>
            <div class="col-xl-6 img-card-side">
                <div class="auth-img-content">
                    <img src="{{ asset('assets/images/auth/img-auth-3.svg') }}" alt="" class="img-fluid">
                    <h3 class="text-white mb-4 mt-5"> {{ __('“Attention is the new currency”') }}</h3>
                    <p class="text-white"> {{__('The more effortless the writing looks, the more effort the writer
                    actually put into the process.')}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom-scripts')
    @if(env('RECAPTCHA_MODULE') == 'yes')
        {!! NoCaptcha::renderJs() !!}
    @endif
@endpush

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Jusu bilietai') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Teoretiniai bilietas') }}
                            <a class="btn btn-primary" href="{{ route('bilietas') }}">{{ __('ziureti') }}</a>
                            <a class="btn btn-primary" href="{{ route('vertinti') }}">{{ __('Vertinti') }}</a>
                            <a class="btn btn-primary" href="{{ route('uzdaryti') }}">{{ __('Uzdaryti') }}</a>
                            <a class="btn btn-primary" href="{{ route('paskirsti') }}">{{ __('Paskirstyti') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

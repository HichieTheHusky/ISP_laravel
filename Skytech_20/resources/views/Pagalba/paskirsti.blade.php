@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Paskirstimo forma') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Paskirstimo informacija') }}
                        <a class="btn btn-primary" href="{{ route('pagalbos') }}">{{ __('uzpildziau') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

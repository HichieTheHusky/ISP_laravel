@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Bilietas') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Bilieto informacija') }}
                            <a class="btn btn-primary" href="{{ route('bilietas') }}">{{ __('uzpildziau') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

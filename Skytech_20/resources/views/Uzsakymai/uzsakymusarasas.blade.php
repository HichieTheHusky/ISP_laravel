@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Užsakymai') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a class="btn btn-primary" href="{{ route('nepatuzsakymusarasas') }}">{{ __('Nepatvirtinti užsakymai') }}</a>

                        <br>
                        <br>
                        <br>
                        <br>
                        {{ __('užsakymai') }}
                        <a class="btn btn-primary" href="{{ route('uzsakymas') }}">{{ __('Peržiūrėti') }}</a>
                        <a class="btn btn-primary" href="{{ route('uzsakymusarasas') }}">{{ __('Atšaukti') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

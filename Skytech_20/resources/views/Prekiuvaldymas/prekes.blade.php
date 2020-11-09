@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Parduotuves prekes') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Prekių duommenys') }}
                        <a class="btn btn-primary" href="{{ route('preke') }}">{{ __('Prekės peržiūra') }}</a>
                        <a class="btn btn-primary" href="{{ route('prekesredag') }}">{{ __('Prekės redagavimo forma') }}</a>
                        <a class="btn btn-primary" href="{{ route('ataskaitoskriterij') }}">{{ __('Ataskaitos kriterių langas') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

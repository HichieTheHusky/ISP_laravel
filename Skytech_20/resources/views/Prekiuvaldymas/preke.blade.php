@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Jusu prekes perziura') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Prekių duommenys') }}
                            <a class="btn btn-primary" href="{{ route('uzsakymosudarymas') }}">{{ __('Užsakymo sudarymo langas') }}</a>
                            <a class="btn btn-primary" href="{{ route('prekesvertinimas') }}">{{ __('Prekes vertinimo langas') }}</a>
                            <br>
                            <br>
                            <br>
                            <br>
                        {{ __('komentaras') }}
                        <a class="btn btn-primary" href="{{ route('komentarasred') }}">{{ __('Komentaro redagavimo forma') }}</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

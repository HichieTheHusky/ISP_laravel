@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Jusu darbuotojai') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a class="btn btn-primary" href="{{ route('ataskaita') }}">{{ __('Ataskaita') }}</a>
<br>
<br>
<br>
                        {{ __('Darbuotojai') }}
                        <a class="btn btn-primary" href="{{ route('darbuotojas') }}">{{ __('Darbuotojo duomenys') }}</a>
                        <a class="btn btn-primary" href="{{ route('darbuotojoredag') }}">{{ __('Darbuotojo redagavimo forma') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

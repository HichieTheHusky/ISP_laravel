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
                        <a class="btn btn-primary" href="{{ route('uzsakymas') }}">{{ __('Ataskaita') }}</a>

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap mt-4" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Nr.</th>
                                    <th>Data</th>
                                    <th>Prekių kiekis</th>
                                    <th>Suma</th>
                                    <th>Būsena</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                </tr>
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

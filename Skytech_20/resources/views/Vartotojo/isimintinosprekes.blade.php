@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Įsimintinos prekės') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table id="datatable-buttons" class="table table-sm table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Kodas</th>
                                    <th>Pavadinimas</th>
                                    <th>Gamintojas</th>
                                    <th>Aprašymas</th>
                                    <th>Kaina</th>
                                </tr>
                            </thead>
                                <tbody>
                                @foreach($merged as $preke)
                                        <tr>
                                            <td style="vertical-align: middle">{{ $preke-> Kodas }}</td>
                                            <td style="vertical-align: middle">{{ $preke-> Pavadinimas }}</td>
                                            <td style="vertical-align: middle">{{ $preke-> Gamintojas }}</td>
                                            <td style="vertical-align: middle">{{ $preke-> Aprašymas }}</td>
                                            <td style="vertical-align: middle">{{ $preke-> Kaina }}</td>
                                        </tr>
                                 @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

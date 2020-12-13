@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profilis') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table id="datatable-buttons" class="table table-sm table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <tbody style="text-align:center;">
                        <tr>
                            <th>Vardas</th>
                            <th>{{ $user['name'] }}</th>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <th>{{ $user['email'] }}</th>
                        </tr>
                        <tr>
                            <th>Paskyros sukūrimo data</th>
                            <th>{{ $user['created_at'] }}</th>
                        </tr>
                        </tbody>
                        </table>
                       
                            <a class="btn btn-primary" href="{{ route('profilisredagavimas') }}">{{ __('Redaguoti') }}</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

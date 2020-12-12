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

{{--                        {{ __('Teoretiniai bilietas') }}--}}
{{--                            <a class="btn btn-primary" href="{{ route('bilietas') }}">{{ __('ziureti') }}</a>--}}
{{--                            <a class="btn btn-primary" href="{{ route('vertinti') }}">{{ __('Vertinti') }}</a>--}}
{{--                            <a class="btn btn-primary" href="{{ route('uzdaryti') }}">{{ __('Uzdaryti') }}</a>--}}
{{--                            <a class="btn btn-primary" href="{{ route('paskirsti') }}">{{ __('Paskirstyti') }}</a>--}}

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Pavadinimas</th>
                                    <th>Kategorija</th>
                                    <th>Sukurta</th>
                                    <th>Veiksmai</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bilietas as $biliet)
                                    <tr>
                                        <td style="vertical-align: middle">{{ $biliet->id }}</td>
                                        <td style="vertical-align: middle">{{ $biliet->pavadinimas }}</td>
                                        <td style="vertical-align: middle">{{ $biliet->kategorija }}</td>
                                        <td style="vertical-align: middle">{{ $biliet->created_at }}</td>

                                        <td style="vertical-align: middle">
                                            @if (auth()->user()->user_type == "user")
                                            <a class="btn btn-link p-0" href="{{ route('bilietas', ['ID' => $biliet->id]) }}">Perziureti</a> |
                                            <a class="btn btn-link p-0" href="{{ route('vertinti', $biliet) }}">Vertinti</a>
                                            @endif
                                        </td>
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

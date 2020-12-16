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
                        @if (auth()->user()->user_type == \App\Models\User::ROLE_WORKER)
                        <a class="btn btn-primary" href="{{ route('nepatuzsakymusarasas') }}">{{ __('Nepatvirtinti užsakymai') }}</a>
                        <a class="btn btn-primary" href="{{ route('uzsakymas') }}">{{ __('Ataskaita') }}</a>
                        @endif
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap mt-4" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Nr</th>
                                    <th>Data</th>
                                    <th>Suma</th>
                                    <th>Pristatymo būdas</th>
                                    <th>Adresas</th>
                                    <th>Būsena</th>
                                    <th>Veiksmai</th>
                                </tr>
                                </thead>
                                <tbody>
                        @foreach($uzsakymai as $uzsakymas)
                            <tr>
                            <?php  $i=1;?>
                                <td style="vertical-align: middle"><?php echo $i;?></td>
                                <td style="vertical-align: middle">{{ $uzsakymas->created_at }}</td>
                                <td style="vertical-align: middle">{{ $uzsakymas->kaina }}€</td>
                                <td style="vertical-align: middle">{{ $uzsakymas->kategorija }}</td>
                                <td style="vertical-align: middle">{{ $uzsakymas->adresas }}</td>
                                <td style="vertical-align: middle">{{ $uzsakymas->statusas }}</td>
                                <td style="vertical-align: middle">
                                    <a class="btn btn-link p-0" href="/salinti">Šalinti</a> 
                                </td>
                                 -->
                                    </tr>
                                    <?php  $i++;?>
                        @endforeach
                    </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

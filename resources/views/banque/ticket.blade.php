<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('bootstrap_css_and_js')
    <title>Ticket</title>
</head>
<body>
    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @elseif (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        {{-- Actual info for client --}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-title">
                        Informations sur le compte du client
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>Cient email</td>
                                <td>{{$account->client->email}}</td>
                            </tr>
                            <tr>
                                <td>Cient Num compte</td>
                                <td>{{$account->numero}}</td>
                            </tr>
                            <tr>
                                <td>Cient Solde</td>
                                <td>{{$account->amount}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            {{-- Client Ticket --}}
            <div class="col-md-12 card shadow-lg border-light" style="width: 40rem; border-radius: 12px;">
                <div class="card-header">
                    <h1>Ciné<strong class="text-danger">Star</strong></h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title mt-2 mb-3" style="font-size: 1.2rem; font-weight: bold; color: #0d0404;">Token : <strong class="text-success">{{ $token }}</strong></h5><hr>
                    <p><strong>Owner email :</strong> {{ $account->client->email }}</p>
                    <p><strong>Owner name :</strong> {{ $account->client->name }}</p>
                    <p><strong>Owner phone :</strong> {{ $account->client->telephone }}</p>
                    <hr>
                    <p><strong>Film title :</strong> {{ $film->title }}</p>
                    <p><strong>Ticket validated :</strong> {{ $film->date_et_heure }}</p>
                    <hr>
                    <img src="{{ asset('storage/'.str_replace('public/', '', $film->image)) }}" alt="Film image" style="width: 100%; height: 140px; object-fit: cover; border-top-left-radius: 12px; border-top-right-radius: 12px;">
                </div><hr>
                <div class="card-footer">
                    <p>Utilisez ce tiket lors de l'entrée dans la salle de cinéma.</p>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>
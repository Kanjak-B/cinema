<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banque - Form payment</title>
    @include('bootstrap_css_and_js')
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card shadow-lg border-light" style="width: 40rem; border-radius: 12px;">
            <img src="{{ asset('storage/images/illico.png') }}" class="card-img-top ms-auto" style="width: 100%; height: 140px; border-top-left-radius: 12px; border-top-right-radius: 12px;" alt="">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted" style="font-size: 0.9rem; color: #666;">
                    Entrez vos informations pour vous connecter à la banque
                </h6>
                <form action="{{ route('banque.check') }}" method="post" class="vstack gap-3">
                    @csrf
                    <input type="hidden" name="film_id" value="{{$film->id}}">
                    <x-input2
                        :name="'numero'"
                        :type="'text'"
                        :placeholder="'Entrez votre numero bancaire'"
                    />
                    <x-input2
                        :name="'password'"
                        :type="'password'"
                        :placeholder="'Entrez votre mot de passe'"
                    />
                    @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                    <x-button
                        :class="'btn btn-dark'"
                        :text="'Verifier'"
                        :type="'submit'"
                    />
                </form>
            </div>
        </div>
    </div>    
</body>
</html>
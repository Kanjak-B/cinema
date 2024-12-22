{{-- Layout --}}
@extends('layout.cinema')

{{-- Page title --}}
@section('page_title', 'Publier un film')

{{-- Main content --}}
@section('content')
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('films.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-input
                    :label="'Titre du film'"
                    :type="'text'"
                    :name="'title'"
                    :instructions="'Minimum 1 caractère'"
                    autofocus
                />
                <x-input
                    :label="'Image'"
                    :type="'file'"
                    :name="'image'"
                    :instructions="'Doit être une image - jpeg, jpg, png d\'au-moins 2Mo'"
                />
                <x-input
                    :label="'Date et heure de diffusion'"
                    :type="'datetime-local'"
                    :name="'date_heure_diffusion'"
                    :instructions="''"
                />
                <x-input
                    :label="'Prix du billet'"
                    :type="'number'"
                    :name="'ticket_price'"
                    :instructions="'Prix du billet en $'"
                />
                <div class="row g-3 align-items-center m-2">
                    <button type="submit" class="btn btn-dark">Publier</button>
                </div>
            </form>
        </div>
    </div>
@endsection
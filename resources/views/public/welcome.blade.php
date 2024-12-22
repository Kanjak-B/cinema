{{-- Layout --}}
@extends('layout.public')

{{-- Page title --}}
@section('page_title', 'Accueil')

{{-- Main content --}}
@section('content')

    <div class="row gap-3 d-flex justify-content-center">
        @foreach ($films as $f)
            <x-card
                :id="$f->id"
                :image="asset('storage/'.str_replace('public/', '', $f->image))"
                :title="strtoupper($f->title)"
                :date="$f->date_et_heure"
                :tiketprice="$f->ticket_price"
            />
        @endforeach
    </div>
@endsection
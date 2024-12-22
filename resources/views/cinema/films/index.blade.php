{{-- Layout --}}
@extends('layout.cinema')

{{-- Page title --}}
@section('page_title', 'Tous les films ajoutés')

{{-- Main content --}}
@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="card shadow">
            <div class="card-header">Listes des films publiés</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Date et heure de diffusion</th>
                            <th>Prix du billet</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($films as $f)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ strtoupper($f->title) }}</td>
                                <td>Le {{ $f->date_heure_diffusion }}</td>
                                <td>{{ number_format($f->ticket_price, thousands_separator: ' ') }}$</td>
                                <td><img src="{{ asset('storage/'.str_replace('public/','', $f->image)) }}" alt="{{ $f->image }}" style="width:50px;height:50px"></td>
                                <td>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
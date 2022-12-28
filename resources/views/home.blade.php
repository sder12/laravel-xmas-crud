@extends('layouts.app')


@section('content')
    <h1> Letterine per Babbo Natale.</h1>
    <span class="fst-italic text-danger d-block mb-3">Istruzioni esercizio di Natale: laravel-xmas-crud</span>

    <hr>
    <span> Creare il sistema della gestione delle letterine per Babbo Natale. </span>

    <ul class="py-3">
        <li>Nome del bambino</li>
        <li>Cognome del bambino</li>
        <li>Indirizzo</li>
        <li>Città</li>
        <li>Data di arrivo della letterina</li>
        <li>Regalo</li>
        <li>Testo della letterina</li>
        <li>Rating del comportamento del bambino durante l'anno da 1 a 5</li>
        <li>Se il regalo è stato consegnato </li>
    </ul>


    <p>
        Creare il progetto Laravel 9. <br>
        Creare la tabella Letters con la relativa migration. <br>
        Inserire nella tabella i dati random generati tramite Faker. <br>
        Implementare tutte le operazioni CRUD. <br>
        Per le operazioni di creazione e update aggiungere la validazione dei campi. <br>
    </p>

    <hr>

    <a href="{{ route('letters.index') }}" class="btn btn-outline-success">See all the letters</a>
@endsection

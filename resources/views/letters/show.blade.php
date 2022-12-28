@extends('layouts.app')


@section('content')
    <h2>Letter n° {{ $letter->id }} </h2>

    {{-- description list --}}
    <dl>
        {{-- description title --}}
        <dt>
            From:
        </dt>
        {{-- description description --}}
        <dd>
            Babbo Natale
        </dd>

        <dt>
            To:
        </dt>
        <dd>
            {{ $letter->name }} {{ $letter->surname }} <br>

            <span class="fst-italic"> goodness: </span>


            @for ($i = 0; $i < $letter->goodness_rating; $i++)
                <i class="fa-solid fa-star"></i>
            @endfor
            @for ($i = 0; $i < 5 - $letter->goodness_rating; $i++)
                <i class="fa-regular fa-star"></i>
            @endfor
        </dd>
        <dt>
            Arrived at:
        </dt>
        <dd>
            {{ $letter->arrival_date }}
        </dd>
        <dt>
            Present:
        </dt>
        <dd>
            {{ $letter->present }}
        </dd>
        <dt>
            Letter text:
        </dt>
        <dd>
            {{ $letter->letter_text }}
            {{-- se description a pezzi di html --}}
            {!! $letter->letter_text !!}
        </dd>
        <dt>
            City:
        </dt>
        <dd>
            {{ $letter->city }}
        </dd>
        <dt>
            Address:
        </dt>
        <dd>
            {{ $letter->address }}
        </dd>
        <dt>
            Arrived:
        </dt>
        <dd>
            @if ($letter->present_was_delivered == 0)
                No
            @endif
            @if ($letter->present_was_delivered == 1)
                Yes
            @endif
        </dd>
    </dl>

    <a href="{{ route('letters.index') }}" class="btn btn-outline-success">See all the letters</a>
@endsection

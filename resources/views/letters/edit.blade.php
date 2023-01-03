@extends('layouts.app')

@section('content')
    <h2>Modify the letter {{ $letter->id }}</h2>
    <div class="row mt-3">
        <div class="col col-8">

            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            <form action="{{ route('letters.update', $letter->id) }}" method="POST">
                @method('PUT')
                @csrf

                {{-- NAME --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control  @error('name') is-invalid  @enderror" id="name"
                        name="name" value="{{ old('name', $letter->name) }}">
                    {{-- ERROR msg --}}
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- SURNAME --}}
                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" class="form-control  @error('surname') is-invalid @enderror" id="surname"
                        name="surname" value="{{ old('surname', $letter->surname) }}">
                    {{-- ERROR msg --}}
                    @error('surname')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- PRESENT --}}
                <div class="mb-3">
                    <label for="present" class="form-label">Wish</label>
                    <input type="text" class="form-control  @error('present') is-invalid @enderror" id="present"
                        name="present" value="{{ old('present', $letter->present) }}">
                    {{-- ERROR msg --}}
                    @error('present')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- ADDRESS --}}
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                        name="address" value="{{ old('address', $letter->address) }}">
                    {{-- ERROR msg --}}
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- CITY --}}
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control @error('city')  is-invalid @enderror" id="city"
                        name="city" value="{{ old('city', $letter->city) }}">
                    {{-- ERROR msg --}}
                    @error('city')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- LETTER TEXT --}}
                <div class="mb-3">
                    <label for="letter_text" class="form-label">Letter Text</label>
                    <textarea class="form-control" id="letter_text" rows="3" name="letter_text"> {{ old('letter_text', $letter->letter_text) }}
                    </textarea>
                </div>

                {{-- GOODNESS RATING --}}
                <div class="mb-3">
                    <label for="goodness_rating" class="form-label">Goodness rating</label>
                    <select class="form-control  @error('goodness_rating')  is-invalid @enderror" id="goodness_rating"
                        name="goodness_rating">
                        <option value="">Goodness rating</option>
                        <option value="1" @selected(old('goodness_rating', $letter->goodness_rating) == '1')>1</option>
                        <option value="2" @selected(old('goodness_rating', $letter->goodness_rating) == '2')>2</option>
                        <option value="3" @selected(old('goodness_rating', $letter->goodness_rating) == '3')>3</option>
                        <option value="4" @selected(old('goodness_rating', $letter->goodness_rating) == '4')>4</option>
                        <option value="5" @selected(old('goodness_rating', $letter->goodness_rating) == '5')> 5</option>
                    </select>
                    {{-- ERROR msg --}}
                    @error('goodness_rating')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- ARRIVAL DATE --}}
                <div class="mb-3">
                    <label for="arrival_date" class="form-label">Arrival Date</label>
                    <input type="date" class="form-control @error('arrival_date') is-invalid @enderror" id="arrival_date"
                        name="arrival_date" value="{{ old('arrival_date', $letter->arrival_date) }}">
                    {{-- ERROR msg --}}
                    @error('arrival_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- BTN SUBMIT --}}
                <button type="submit" class="btn btn-outline-success">Submit</button>
            </form>

        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <h2>Modify the letter {{ $letter->id }}</h2>
    <div class="row mt-3">
        <div class="col col-8">

            <form action="{{ route('letters.update', $letter->id) }}" method="POST">
                @method('PUT')
                @csrf


                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $letter->name }}">
                </div>

                <div class="mb-3">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" class="form-control" id="surname" name="surname" value="{{ $letter->surname }}">
                </div>
                <div class="mb-3">
                    <label for="present" class="form-label">Wish</label>
                    <input type="text" class="form-control" id="present" name="present" value="{{ $letter->present }}">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $letter->address }}">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" name="city" value="{{ $letter->city }}">
                </div>

                <div class="mb-3">
                    <label for="letter_text" class="form-label">Letter Text</label>
                    <textarea class="form-control" id="letter_text" rows="3" name="letter_text"> {{ $letter->letter_text }}
                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="goodness_rating" class="form-label">Goodness rating</label>
                    <select class="form-control" id="goodness_rating" name="goodness_rating">
                        <option value="">Goodness rating</option>
                        <option value="1" @selected($letter->goodness_rating == '1')>1</option>
                        <option value="2" @selected($letter->goodness_rating == '2')>2</option>
                        <option value="3" @selected($letter->goodness_rating == '3')>3</option>
                        <option value="4" @selected($letter->goodness_rating == '4')>4</option>
                        <option value="5" @selected($letter->goodness_rating == '5')> 5</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="arrival_date" class="form-label">Arrival Date</label>
                    <input type="date" class="form-control" id="arrival_date" name="arrival_date"
                        value="{{ $letter->arrival_date }}">
                </div>

                <button type="submit" class="btn btn-outline-success">Submit</button>
            </form>

        </div>
    </div>
@endsection

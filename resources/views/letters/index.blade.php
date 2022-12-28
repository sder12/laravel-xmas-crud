@extends('layouts.app')


@section('content')
    <h1 class="text-center">Letters</h1>
    <a href="{{ route('letters.create') }}" class="btn btn-outline-success">Create new letter</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Goodness</th>
                <th scope="col">Adress</th>
                <th scope="col">City</th>
                <th scope="col">Present</th>
                <th scope="col">Arrival Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($letters as $letter)
                <tr>
                    <th scope="row">{{ $letter->id }}</th>
                    <td>{{ $letter->name }}</td>
                    <td>{{ $letter->surname }}</td>
                    <td>{{ $letter->goodness_rating }}</td>
                    <td>{{ $letter->address }}</td>
                    <td>{{ $letter->city }}</td>
                    <td>{{ $letter->present }}</td>
                    <td>{{ $letter->arrival_date }}</td>
                    <td>
                        <a href="{{ route('letters.show', $letter->id) }}" class="btn btn-success">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('letters.edit', $letter->id) }}" class="btn btn-warning">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <a href="#" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

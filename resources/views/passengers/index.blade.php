@extends('layouts.app')
@section('page-title', 'Passenger')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-5 text-primary">
                    Passengers
                </h1>
            </div>
            <div class="col 12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Age</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse ($passengers as $passenger)
                        <tr>
                            <td>{{ $passenger->name }}</td>
                            <td>{{ $passenger->surname }}</td>
                            <td>{{ $passenger->age }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11" class="text-center text-danger">No trains available.</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')

    <div class="container">
        <div class="row">
            <div class="col 12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">ID</th>
                            <th scope="col">Company</th>
                            <th scope="col">Date</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Train Code</th>
                            <th scope="col">Departure</th>
                            <th scope="col">Arrival</th>
                            <th scope="col">Carriage Number</th>
                            <th scope="col">On Time</th>
                            <th scope="col">Canceled</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse ($trains as $train)
                        <tr>
                            <td>{{ $train->id }}</td>
                            <td>{{ $train->company }}</td>
                            <td>{{ $train->date }}</td>
                            <td>{{ $train->from }}</td>
                            <td>{{ $train->to }}</td>
                            <td>{{ $train->train_code }}</td>
                            <td>{{ $train->departure }}</td>
                            <td>{{ $train->arrival }}</td>
                            <td>{{ $train->carriage_number }}</td>
                            <td>{{ $train->on_time ? 'Yes' : 'No' }}</td>
                            <td>{{ $train->canceled ? 'Yes' : 'No' }}</td>
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

{{--
Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna. --}}

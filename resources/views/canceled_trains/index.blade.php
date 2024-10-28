@extends('layouts.app')
@section('page-title', 'Passenger')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-5 text-primary">
                    Canceled Trains
                </h1>
            </div>
            <div class="col 12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th scope="col">ID</th>
                            <th scope="col">Company</th>
                            <th scope="col">From</th>
                            <th scope="col">To</th>
                            <th scope="col">Train Code</th>
                            <th scope="col">Departure</th>
                            <th scope="col">Arrival</th>
                            <th scope="col">Carriage Number</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse ($canceledTrains as $canceledTrain)
                        <tr>
                            <td>{{ $canceledTrain->id }}</td>
                            <td>{{ $canceledTrain->company }}</td>
                            <td>{{ $canceledTrain->from }}</td>
                            <td>{{ $canceledTrain->to }}</td>
                            <td>{{ $canceledTrain->train_code }}</td>
                            <td>{{ $canceledTrain->departure }}</td>
                            <td>{{ $canceledTrain->arrival }}</td>
                            <td>{{ $canceledTrain->carriage_number }}</td>
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

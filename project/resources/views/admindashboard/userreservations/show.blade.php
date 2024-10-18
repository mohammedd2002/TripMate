@extends('admindashboard.master')
@section('usersReservations-active', 'active')

@section('content')
    <div class="hours">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    </div>
    <table class="table text-center">
        <caption class="caption-top fs-5 fw-bold">User Reservations (Total Reservations: {{ $users->flatMap->destinations->count() }})</caption>
        <thead class="table-secondary"> <!-- Gray header -->
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Destination</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody class="table-light"> <!-- White rows -->
            @php $counter = 1; @endphp
            @foreach ($users as $user)
                @foreach ($user->destinations as $destination)
                    <tr>
                        <th scope="row">{{ $counter++ }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $destination->name }}</td>
                        <td>{{ $destination->date }}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>    
@endsection

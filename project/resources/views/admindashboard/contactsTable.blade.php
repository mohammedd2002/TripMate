@extends('admindashboard.master')
@section('contacts-active', 'active')

@section('content')
    <table class="table">
        <caption>List of Contacts</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Message</th>
            </tr>
        </thead>
        <tbody>

            @if (count($data) > 0)
                @foreach ($data as $key => $user)
                    <tr>
                        {{-- <th scope="row">{{ ++$key }}</th> --}}
                        <th scope="row">{{ $data->firstItem() + $loop->index }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->message }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        {{-- {{ $data->links() }} --}}
        {{ $data->render('pagination::bootstrap-5') }}
    </table>
@endsection

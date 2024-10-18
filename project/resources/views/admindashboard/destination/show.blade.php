@extends('admindashboard.master')
@section('destinations-active', 'active')

@section('content')
    <div class="hours">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('Deleted'))
        <div class="alert alert-success">
            {{ session('Deleted') }}
        </div>
    @endif

    </div>
    <table class="table">
        <caption>List of destinations</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">date</th>
                <th scope="col">price</th>
                <th scope="col">image</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
           
            @if (count($destinations) > 0)
                @foreach ($destinations as $destination)
                    <tr>
                        {{-- <th scope="row">{{ ++$key }}</th> --}}
                        <th scope="row">{{ $destinations->firstItem() + $loop->index }}</th>

                        <td>{{ $destination->name }}</td>
                        <td>{{ $destination->date }}</td>
                        <td>{{ $destination->price }}</td>
                        <td> <img width="40px" src="{{ asset("storage/destination/$destination->image") }}"></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                        href="{{ route('admin.destination.edit', ['destination' => $destination]) }}"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                 
                                    <form action="{{ route('admin.destination.destroy', ['destination' => $destination]) }}"
                                        method="POST" id="delete_form">
                                        @method('DELETE')
                                        @csrf
                                        <a onclick="return confirm('Are you want to delete this record ?')" class="dropdown-item" href="javascript:$('form#delete_form').submit();"><i
                                                class="bx bx-trash me-1"></i>
                                            Delete</a>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        {{-- {{ $data->links() }} --}}
        {{ $destinations->render('pagination::bootstrap-5') }}
    </table>
@endsection

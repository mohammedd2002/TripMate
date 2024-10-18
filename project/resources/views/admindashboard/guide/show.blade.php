@extends('admindashboard.master')
@section('guides-active', 'active')

@section('content')
    <div class="hours">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    </div>
    <table class="table">
        <caption>List of Guides</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">description</th>
                <th scope="col">image</th>
                <th scope="col">linkedin</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
           
            @if (count($guides) > 0)
                @foreach ($guides as $guide)
                    <tr>
                        {{-- <th scope="row">{{ ++$key }}</th> --}}
                        <th scope="row">{{ $guides->firstItem() + $loop->index }}</th>

                        <td>{{ $guide->name }}</td>
                        <td>{{ $guide->email }}</td>
                        <td>{{ $guide->description }}</td>
                        <td> <img width="40px" src="{{ asset("storage/guide/$guide->image") }}"></td>
                        <td>{{ $guide->linkedin }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                        href="{{ route('admin.guide.edit', ['guide' => $guide]) }}"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                 
                                    <form action="{{ route('admin.guide.destroy', ['guide' => $guide]) }}"
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
        {{ $guides->render('pagination::bootstrap-5') }}
    </table>
@endsection

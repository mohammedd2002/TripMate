@extends('admindashboard.master')
@section('about-active', 'active')

@section('content')
    <div class="hours">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

    </div>
    <table class="table">
        <caption>About Section</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">description</th>
                <th scope="col">image</th>
            </tr>
        </thead>
        <tbody>

            @if (count($abouts) > 0)
                @foreach ($abouts as $about)
                    <tr>
                        {{-- <th scope="row">{{ ++$key }}</th> --}}
                        <th scope="row">{{ $abouts->firstItem() + $loop->index }}</th>
                        <td>{{ $about->title }}</td>
                        <td>{{ $about->description }}</td>
                        <td> <img width="40px" src="{{ asset("storage/about/$about->image") }}"></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('admin.about.edit', ['about' => $about]) }}"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        {{-- {{ $data->links() }} --}}
        {{ $abouts->render('pagination::bootstrap-5') }}
    </table>
@endsection

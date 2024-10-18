@extends('admindashboard.master')
@section('about-active', 'active')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">About Section</h5>

        </div>
        @if (session('Updated'))
            <div class="alert alert-success">
                {{ session('Updated') }}
            </div>
        @endif
        <div class="card-body">

            <form action="{{ route('admin.about.update', ['about' => $about]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="basic-default-name"
                            placeholder="Title" value="{{ $about->title }}" />
                    </div>
                </div>
                <x-validation-error name="name"></x-validation-error>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" id="editor" class="form-control" cols="30" rows="10">{{ $about->description }}</textarea>
                    </div>
                </div>
                <x-validation-error name="description"></x-validation-error>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" id="basic-default-name"
                            placeholder="Image">
                    </div>
                </div>
                <x-validation-error name="image"></x-validation-error>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        @endsection

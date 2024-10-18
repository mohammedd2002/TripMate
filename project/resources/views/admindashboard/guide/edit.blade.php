@extends('admindashboard.master')
@section('guides-active', 'active')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Guide</h5>

        </div>
        @if (session('Updated'))
            <div class="alert alert-success">
                {{ session('Updated') }}
            </div>
        @endif
        <div class="card-body">

            <form action="{{ route('admin.guide.update', ['guide' => $guide]) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="Name"
                            value="{{ $guide->name }}" />
                    </div>
                </div>
                <x-validation-error name="name"></x-validation-error>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">Email</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" id="basic-default-company"
                            placeholder="ACME Inc." value="{{ $guide->email }}" />
                    </div>
                </div>
                <x-validation-error name="email"></x-validation-error>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" id="basic-default-name"
                            placeholder="description" value="{{ $guide->description }}" />
                    </div>
                </div>
                <x-validation-error name="description"></x-validation-error>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Linkedin</label>
                    <div class="col-sm-10">
                        <input type="url" name="linkedin" class="form-control" id="basic-default-name"
                            placeholder="linkedin" value="{{ $guide->linkedin }}" />
                    </div>
                </div>
                <x-validation-error name="linkedin"></x-validation-error>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control" id="basic-default-name"
                            placeholder="Image" />
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

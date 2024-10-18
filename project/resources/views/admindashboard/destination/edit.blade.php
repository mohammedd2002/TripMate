@extends('admindashboard.master')
@section('destinations-active', 'active')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Destination</h5>

        </div>
        @if (session('Updated'))
            <div class="alert alert-success">
                {{ session('Updated') }}
            </div>
        @endif
        <div class="card-body">

            <form action="{{ route('admin.destination.update', ['destination' => $destination]) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="Name"
                            value="{{ $destination->name }}" />
                    </div>
                </div>
                <x-validation-error name="name"></x-validation-error>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">date</label>
                    <div class="col-sm-10">
                        <input name="date" type="date" class="form-control" id="basic-default-company"
                            placeholder="ACME Inc." value="{{ $destination->date }}" />
                    </div>
                </div>
                <x-validation-error name="date"></x-validation-error>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">price</label>
                    <div class="col-sm-10">
                        <input type="number" name="price" class="form-control" id="basic-default-name"
                            placeholder="Price" value="{{ $destination->price }}" />
                    </div>
                </div>
                <x-validation-error name="price"></x-validation-error>

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
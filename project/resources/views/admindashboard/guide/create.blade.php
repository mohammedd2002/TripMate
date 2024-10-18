@extends('admindashboard.master')
@section('guides-active', 'active')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Guides</h5>

        </div>
       
        <div class="card-body">
            <form action="{{ route('admin.guide.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="basic-default-name" placeholder="Name" />
                    </div>
                </div>
                <x-validation-error name="name"></x-validation-error>
                
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="basic-default-name" placeholder="Email" />
                    </div>
                </div>
                <x-validation-error name="email"></x-validation-error>
                

                  <div class="row mb-3">
                      <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" id="basic-default-name" placeholder="Description" />
                    </div>
                </div>
                <x-validation-error name="description"></x-validation-error>
                
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Linkedin</label>
                    <div class="col-sm-10">
                        <input type="url" name="linkedin" class="form-control" id="basic-default-name" placeholder="Linkedin" />
                    </div>
                </div>
                <x-validation-error name="linkedin"></x-validation-error>
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
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
            @endsection

@extends('layouts.backend.app')

@section('title', 'Category')

@push('css')
@endpush

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Category
                        <small>Add new data for Category</small>
                    </h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label" for="name">Category Name</label>
                                <input type="text" id="name" class="form-control" name="name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="image">Category Image</label>
                            <input type="file" name="image">
                        </div>

                        <a href="{{route('admin.category.index')}}" class="btn btn-danger m-t-15 waves-effect">BACK</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush

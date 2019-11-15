@extends('layouts.backend.app')

@section('title', 'Tag')

@push('css')
@endpush

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Tag
                        <small>Edit data for Tag</small>
                    </h2>
                </div>
                <div class="body">
                    <form action="{{route('admin.tag.update', $tag->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group form-float">
                            <div class="form-line">
                                <label class="form-label" for="name">Tag Name</label>
                                <input type="text" id="name" class="form-control" name="name" value="{{$tag->name}}" required>
                            </div>
                        </div>

                        <a href="{{route('admin.tag.index')}}" class="btn btn-danger m-t-15 waves-effect">BACK</a>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush

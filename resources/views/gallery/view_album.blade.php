@extends('layout.home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <div class="col-lg-6 text-left justify-content-start">
                <h2>Album Name</h2>
            </div>
            <div class="col-lg-6 text-right justify-content-end">
                 <a href="{{ route('edit.album', 1) }}" class="btn btn-secondary">Edit Album</a>
                 <a href="#" class="btn btn-danger">Delete Album</a>
                <a href="{{ route('all.album') }}" class="btn btn-secondary">Back to Albums</a>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layout.home')
@section('content')
<div class="container"></div>
    <div class="row">
        <div class="col-lg-12">
            <h2>Add Photo</h2>
            <form action="{{ route('store.photo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Photo Title</label>
                    <input type="text" name="photo_title" class="form-control" value="{{ old('photo_title') }}" id="">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Photo Description</label>
                    <textarea name="photo_desc" class="form-control" id="">{{ old('photo_desc') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Photo</label>
                    <input type="file" name="photo" class="form-control" id="">
                </div>

                <button type="submit" class="btn btn-primary">Add Photo</button>
                <a href="{{ route('view.album') }}" class="btn btn-secondary">Back to Album</a>
            </form>
        </div>
    </div>
</div>
@endsection
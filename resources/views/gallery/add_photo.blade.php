@extends('layout.home')
@section('content')
<div class="container"></div>
    <div class="row">
        <div class="col-lg-12">
            <h2>Add Photo</h2>
            @if (session('success'))
            <div class="alert alert-info alert-dismissible fade show d-flex justify-content-between" role="alert">
                    <h4 class="text-black">{{ session('success') }}</h4>

                    <button type="button" class="btn btn-close text-danger" data-bs-dismiss="alert" aria-label="Close">Click to Close</button>
                </div>
                
            @endif
            
            <form action="{{ route('store.photo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="hidden" class="form-control" name="album_id" value="{{ $album_id }}">
                    <label for="" class="form-label">Photo Title</label>
                    <input type="text" name="photo_title" class="form-control" value="{{ old('photo_title') }}" id="">
                    @error('photo_title')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Photo Description</label>
                    <textarea name="photo_desc" class="form-control" id="">{{ old('photo_desc') }}</textarea>
                    @error('photo_desc')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Photo</label>
                    <input type="file" name="photo" class="form-control" id="">
                    @error('photo')
                        <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Add Photo</button>
                <a href="{{ route('view.album', request('id')) }}" class="btn btn-primary">Back to Album</a>
                
            </form>
        </div>
    </div>
</div>
@endsection
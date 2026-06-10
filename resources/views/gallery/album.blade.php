@extends('layout.home')
@section('content')
<div class="container">
    <div class="row">
        
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 >Create Album</h5> <a href="{{ route('all.album') }}" class="btn btn-info">Back to Albums</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('store.album') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Album Name</label>
                            <input type="text" name="album_name" class="form-control" value="{{ old('album_name') }}" id="">
                            @error('album_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Album Description</label>
                            <textarea name="album_desc" class="form-control" id="" value="{{ old('album_desc') }}"></textarea>
                            @error('album_desc')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Cover Image</label>
                            <input type="file" name="album_thumbnail" class="form-control" id="">
                            @error('album_thumbnail')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
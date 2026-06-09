@extends('layout.home')
@section('content')
<div class="container">
    <div class="row">
        
            <div class="card">
                <div class="card-header">
                    <h5 >Create Album</h5>
                    <a href="" class="">All Albums</a>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Album Name</label>
                            <input type="text" name="album_name" class="form-control" id="">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Album Description</label>
                            <textarea name="album_description" class="form-control" id=""></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Cover Image</label>
                            <input type="file" name="album_thumbnail" class="form-control" id="">
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
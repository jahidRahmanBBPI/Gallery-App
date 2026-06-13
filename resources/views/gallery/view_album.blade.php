@extends('layout.home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <div class="col-lg-6 text-left justify-content-start">
                <h2>{{ $album->album_name }}</h2>
                @if (session('delete'))
                    <strong class="text-danger">{{ session('delete') }}</strong>
                @endif
                
            </div>
            <div class="col-lg-6 text-right justify-content-end">
                 <a href="{{ route('add.photo', $album->id) }}" class="btn btn-info">Upload Photo</a>
                 {{-- <a href="#" class="btn btn-danger">Delete Album</a> --}}
                <a href="{{ route('all.album') }}" class="btn btn-secondary">Back to Albums</a>
            </div>
        </div>
        <div class="container">
            <div class="row">

                
                @foreach ($photos as $photo)
                
            
                @if ($photo->id)
                    <div class="col-lg-4 text-center">
                    <div class="card border-3  mb-0 shadow-sm">
                        <div class="card-body text-center justify-content-between">
                            <a href="" class=""><img width="100%" height="75%" src="{{ asset('album_photo/'. $photo->photo) }}" alt="" class="mb-2 img-fluid"></a>
                            
                            
                            <div class="row align-items-center justify-content-between-space">
                                <h5 class=" px-2">{{ $photo->photo_name }}</h5>
                            <p class="card-text px-1">{{ $photo->photo_desc }}</p>
                            
                        </div>

                        @if ($photo->id)
                            <div class="mt-2 align-items-end justify-content"><a href="{{ route('delete.photo',['id' => $photo->id]) }}" class="btn btn-danger">Delete Photo</a></div>
                        @else
                            <div class="mt-2 align-items-end justify-content"><a href="" class="btn btn-danger">Delete Photo</a></div>
                        @endif
                        
                        </div>
                    </div>
                </div>
                @else
                
                <div class="alert text-danger alert-info alert-dismissible fade show" role="alert">
                    <strong>This album is empty. Upload your first photo to get started.</strong>

                    <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close">Click to Close</button>
                </div>

                @endif
                
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
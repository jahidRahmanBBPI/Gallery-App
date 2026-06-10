@extends('layout.home')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <div class="col-lg-6 text-left justify-content-start">
                {{-- <h2>{{ $album->album_name }}</h2> --}}
                <h2>Album Name</h2>
                {{  }}
            </div>
            <div class="col-lg-6 text-right justify-content-end">
                 <a href="{{ route('add.photo') }}" class="btn btn-info">Add Photo</a>
                 {{-- <a href="#" class="btn btn-danger">Delete Album</a> --}}
                <a href="{{ route('all.album') }}" class="btn btn-secondary">Back to Albums</a>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-4 text-center">
                    <div class="card border-3  mb-0 shadow-sm">
                        <div class="card-body text-center justify-content-between">
                            <a href="" class=""><img width="100%" height="75%" src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_960_720.jpg" alt="" class="mb-2 img-fluid"></a>
                            
                            <div class="row align-items-center justify-content-between-space">
                                <p class="card-title p-0">Special treatment</p>
                            {{-- <p class="px-0 card-text">Special title treatment.</p> --}}
                        </div>

                        <div class="mt-2 align-items-end justify-content"><a href="" class="btn btn-danger">Delete Photo</a></div>

                        </div>
                    </div>
                </div>

                {{-- <div class="col-lg-4 text-center">
                    <div class="card border-3  mb-0 shadow-sm">
                        <div class="card-body text-center justify-content-between">
                            <a href="" class=""><img width="100%" height="75%" src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_960_720.jpg" alt="" class="mb-2 img-fluid"></a>
                            
                            <div class="row align-items-center justify-content-between-space">
                                <p class="card-title p-0">Special treatment</p>
                            
                            </div>

                            <div class="mt-2 align-items-end justify-content"><a href="" class="btn btn-danger">Delete Photo</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 text-center">
                    <div class="card border-3  mb-0 shadow-sm">
                        <div class="card-body text-center justify-content-between">
                            <a href="" class=""><img width="100%" height="75%" src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_960_720.jpg" alt="" class="mb-2 img-fluid"></a>
                            
                            <div class="align-items-center justify-content-between-space">
                                <p class="card-title">Special treatment</p>
                            
                            </div>

                            <div class="mt-2 align-items-end justify-content"><a href="" class="btn btn-danger">Delete Photo</a></div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>
@endsection
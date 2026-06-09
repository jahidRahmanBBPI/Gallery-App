@extends('layout.home')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 >All Albums</h5> <a href="" class="btn btn-primary">Create album</a>
                </div>
                <div class="card-body">
                    <div class="row">



                        <div class="col-lg-4 text-center">
                            <div class="card border-3  mb-0 shadow-sm">
                                <div class="card-body text-center justify-content-between">
                                    <a href="" class=""><img width="100%" height="75%" src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_960_720.jpg" alt="" class="mb-2 img-fluid"></a>
                                    
                                    <h5 class="card-title">Special treatment</h5>
                                    <p class="card-text">Special title treatment.</p>
                                    <div class="d-flex justify-content-between-space">
                                        <div class="mx-4">
                                            <a href="{{ route('view.album') }}" class="btn btn-primary">View</a>
                                        </div>
                                        <div class="mx-4">
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="col-lg-4 text-center">
                            <div class="card border-0  mb-0 shadow-sm">
                                <div class="card-body text-center justify-content-between">
                                    <a href="" class=""><img width="100%" height="75%" src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_960_720.jpg" alt="" class="mb-2 img-fluid"></a>
                                    
                                    <h5 class="card-title">Special treatment</h5>
                                    <p class="card-text">Special title treatment.</p>
                                    <div class="d-flex justify-content-between-space">
                                        <div class="mx-4">
                                            <a href="#" class="btn btn-primary">View</a>
                                        </div>
                                        <div class="mx-4">
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-4 text-center">
                            <div class="card border-0  mb-0 shadow-sm">
                                <div class="card-body text-center justify-content-between">
                                    <a href="" class=""><img width="100%" height="75%" src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_960_720.jpg" alt="" class="mb-2 img-fluid"></a>
                                    
                                    <h5 class="card-title">Special treatment</h5>
                                    <p class="card-text">Special title treatment.</p>
                                    <div class="d-flex justify-content-between-space">
                                        <div class="mx-4">
                                            <a href="#" class="btn btn-primary">View</a>
                                        </div>
                                        <div class="mx-4">
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 text-center">
                            <div class="card border-0  mb-0 shadow-sm">
                                <div class="card-body text-center justify-content-between">
                                    <a href="" class=""><img width="100%" height="75%" src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_960_720.jpg" alt="" class="mb-2 img-fluid"></a>
                                    
                                    <h5 class="card-title">Special treatment</h5>
                                    <p class="card-text">Special title treatment.</p>
                                    <div class="d-flex justify-content-between-space">
                                        <div class="mx-4">
                                            <a href="#" class="btn btn-primary">View</a>
                                        </div>
                                        <div class="mx-4">
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 text-center">
                            <div class="card border-0  mb-0 shadow-sm">
                                <div class="card-body text-center justify-content-between">
                                    <a href="" class=""><img width="100%" height="75%" src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_960_720.jpg" alt="" class="mb-2 img-fluid"></a>
                                    
                                    <h5 class="card-title">Special treatment</h5>
                                    <p class="card-text">Special title treatment.</p>
                                    <div class="d-flex justify-content-between-space">
                                        <div class="mx-4">
                                            <a href="#" class="btn btn-primary">View</a>
                                        </div>
                                        <div class="mx-4">
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 text-center">
                            <div class="card border-0  mb-0 shadow-sm">
                                <div class="card-body text-center justify-content-between">
                                    <a href="" class=""><img width="100%" height="75%" src="https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_960_720.jpg" alt="" class="mb-2 img-fluid"></a>
                                    
                                    <h5 class="card-title">Special treatment</h5>
                                    <p class="card-text">Special title treatment.</p>
                                    <div class="d-flex justify-content-between-space">
                                        <div class="mx-4">
                                            <a href="#" class="btn btn-primary">View</a>
                                        </div>
                                        <div class="mx-4">
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        


        </div>
    </div>
</div>

@endsection
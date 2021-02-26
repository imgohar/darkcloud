@extends('layouts.app')


@section('content')
     <!-- Breadcrumb Start -->
     <div class=" main-bg">
        <div class="container-fluid p-0">
            <div class="text-left iq-breadcrumb-one
                  iq-bg-over black     ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12">
                            <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                                <h2 class="title">
                              Error 404                       </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Home</a></li>
                                    <li class="breadcrumb-item active">Error 404</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Blog Start -->
    <section class="iq-blog-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="fourzero-image mb-5">
                        <img src="{{URL::asset('images/others/03.png')}}" class="img-fluid" alt="404" />
                    </div>

                    <h4> 404 Error</h4>
                    <p class="mb-5">

                        Oops! This Page is Not Found. </p>

                    <div class="d-block">
                        <a class="iq-button" href="/">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
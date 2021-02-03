@extends('layouts.tv1_app')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
                <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">#mainTitle</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">#parent</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">#child1</a>
                        </li>
                        <li class="breadcrumb-item active">thisModule
                        </li>
                        </ol>
                    </div>
                    </div>
                </div>
                <div class="content-header-right col-md-4 col-12">
                    <div class="btn-group float-md-right">
                    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-settings mr-1"></i>Action</button>
                    <div class="dropdown-menu arrow"><a class="dropdown-item" href="#"><i class="fa fa-calendar mr-1"></i> Calender</a><a class="dropdown-item" href="#"><i class="fa fa-cart-plus mr-1"></i> Cart</a><a class="dropdown-item" href="#"><i class="fa fa-life-ring mr-1"></i> Support</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-cog mr-1"></i> Settings</a>
                    </div>
                    </div>
                </div>
                </div>


            <!-- content-body here! -->
                <div class="content-body">


                    <section class="row">
                        <div class="col-sm-12">
                            <!-- Kick start -->
                            <div id="kick-start" class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Hi! :)</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>
                                                Anda login dengan status:{{ session('userId') }}.
                                                Terimakasih :)
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Kick start -->
                        </div>
                    </section>
                </div>
        </div>
    </div>
@endsection

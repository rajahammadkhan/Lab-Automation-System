@extends('layouts.tester-template')
@section('title')
    Profile
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            @include('layouts.error')
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <ul class="breadcrumb breadcrumb-style ">
                                <li class="breadcrumb-item">
                                    <h4 class="page-title">Tester Profile</h4>
                                </li>

                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <a href="{{url()->previous()}}">
                                <button type="button" class="btn btn-primary float-right mt-3"> Back
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding: 20px 30px";>

                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">PROFILE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">UPDATE</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent" style="padding: 20px 30px";>
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row ">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <p><b style="font-weight: bold">NAME</b> : {{auth()->user()->name}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <p><b style="font-weight: bold">EMAIL</b> : {{auth()->user()->email}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <p><b style="font-weight: bold">CELL NUMBER</b> : {{auth()->user()->erp_cell_number}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <p><b style="font-weight: bold">ALTERNATIVE NUMBER</b> : {{auth()->user()->erp_alternative_number}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <p><b style="font-weight: bold">ADDRESS</b> : {{auth()->user()->erp_address}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <p><b style="font-weight: bold">COUNTRY</b> : {{auth()->user()->erp_country}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form method="POST" id="home" action="{{route('profile.update',auth()->user()->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row ">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" value="{{auth()->user()->name}}" name="name"  id="name" class="form-control" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="email" value="{{auth()->user()->email}}"  name="email" id="email" class="form-control" placeholder="Email" readonly>


                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text"  min="0" value="{{auth()->user()->erp_cell_number}}" name="erp_cell_number" id="cell_number" class="form-control" placeholder="Cell Number">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" min="0" value="{{auth()->user()->erp_alternative_number}}" name="erp_alternative_number" id="alternative_number" class="form-control" placeholder="Alternative Number">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text"  value="{{auth()->user()->erp_address}}" name="erp_address"  id="address" class="form-control" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" value="{{auth()->user()->erp_country}}" name="erp_country" id="country" class="form-control" placeholder="Country">
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </section>
@endsection


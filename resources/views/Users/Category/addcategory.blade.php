@extends('layouts.template')
@section('title')
     Category
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
                                    <h4 class="page-title">Add Category</h4>
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
                        <div class="header">
                            <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="email_address1">Status</label>
                                <div class="row">
                                    <div class="col-sm-3 col-lg-3">
                                        <div class="form-check form-check-radio">
                                            <label>
                                                <input checked name="erp_status" class="erp_status" type="radio" value="1" />
                                                <span>Enable</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-lg-3x">
                                        <div class="form-check form-check-radio">
                                            <label>
                                                <input name="erp_status" class="erp_status" type="radio" value="0" />
                                                <span>Disable</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </br>
                                <label for="email_address1">Category Name</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address1"
                                               class="form-control" name="erp_category_name"
                                               placeholder="Type Category Name Here">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit"
                                            class="btn btn-info waves-effect">Add Category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div></div>
    </section>
@endsection

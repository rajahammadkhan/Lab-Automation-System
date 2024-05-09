@extends('layouts.template')
@section('title')
    Testing Request
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
                                    <h4 class="page-title">Testing Request</h4>
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
                            <form action="{{route('testing.store')}}" method="post" enctype="multipart/form-data">
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
                                <select id="category" class="form-control" name="erp_category_name">
                                    @foreach($category as $row)
                                        <option value="{{$row->erp_category_name}}">{{$row->erp_category_name}}</option>
                                    @endforeach
                                </select>
                                </br>
                                <label for="email_address1">Product Name</label>
                                <div class="form-line">
                                    <select class="form-control" name="erp_product_name">
                                        @foreach($products as $row)
                                            <option value="{{$row->erp_product_name}}">{{$row->erp_product_name}}</option>
                                        @endforeach
                                    </select>
                                <br>
                                    <label for="">Testing Request</label>
                                    <select class="form-control select2" name="erp_request_type" id="erp_request_type" placeholder="Select">
                                        <option value="">Select</option>
                                        <option value="Suggestion">Suggestion</option>
                                        <option value="Request">Request</option>
                                    </select>
                                    <br>
                                    <div class="Suggestion"><br>
                                        <h5 class="modal-title" id="formModal">Suggestion</h5><br>
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-lg-12 col-12">
                                                    <div class="card">
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">Suggestion on Categories?</label>
                                                            <input type="text" name="erp_suggestion_category" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput" >Suggestion on Products?</label>
                                                            <input type="text" name="erp_suggestion_product" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput" >Requirements and Needs</label>
                                                            <input type="text" name="erp_requirement_need" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput" >General Feedback</label>
                                                            <input type="text" name="erp_general_feedback" placeholder="">
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        </div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Request">
                                        <label for="email_address1">Request</label><br>
                                        <textarea name="erp_testing_request"  class="form-control ckeditor" id="comment_text" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" value="request" name="erp_hidden_type">
                                    <button type="submit"
                                            class="btn btn-info waves-effect">Add Request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div></div>
    </section>
@endsection

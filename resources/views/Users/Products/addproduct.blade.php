@extends('layouts.template')
@section('title')
     Products
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
                                <h4 class="page-title">Add Products</h4>
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
                    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
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
                            @foreach($data as $row)
                            <option value="{{$row->erp_category_name}}">{{$row->erp_category_name}}</option>
                            @endforeach
                        </select>
                        </br>
                        <label for="email_address1">Product Name</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="email_address1"
                                       class="form-control" name="erp_product_name"
                                       placeholder="Type Product Name Here">
                            </div>
                        </div>
                        <label for="email_address1">Product Code</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="email_address1"
                                       class="form-control" name="erp_product_code"
                                       placeholder="Type Product Code Here">
                            </div>
                        </div>
                        <label for="email_address1">Price</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="email_address1"
                                       class="form-control" name="erp_product_price"
                                       placeholder="Type Price Here">
                            </div>
                        </div>
                        <label for="email_address1">Sale Price</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="email_address1"
                                       class="form-control" name="erp_sales_price"
                                       placeholder="Type Sale Price Here">
                            </div>
                        </div>
                        <label for="email_address1">Short Description</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="email_address1"
                                       class="form-control" name="erp_short_description"
                                       placeholder="Type Short Description Here">
                            </div>
                        </div>
                        <label for="email_address1">Long Description</label>
                        <textarea name="erp_long_description"  class="form-control ckeditor" id="comment_text" cols="30" rows="10"></textarea>
                        <br>
                        <div class="file_upload">
                            <div class="modal-header">
                                <h5 class="modal-title" id="formModal">File Upload</h5>
                            </div>
                        </div>
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input name="erp_product_image" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" name="erp_document_file" type="text">
                            </div>
                        </div>
                        <br>
                        <div class="modal-footer">
                            <button type="submit"
                                    class="btn btn-info waves-effect">Add Products</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div></div>
</section>
@endsection

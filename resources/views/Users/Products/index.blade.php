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
                                        <h4 class="page-title">All Products</h4>
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
                            <div class="body table-responsive">
                                <table class="table" id="myTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category</th>
                                        <th>Product</th>
                                        <th>Code</th>
                                        <th>Price</th>
                                        <th>Sale</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th class="w-25">Actions</th>

                                    </tr>
                                    </thead>
                                    <?php
                                    $count=1
                                    ?>
                                    @foreach($data as $row)
                                        <tr>
                                            <th scope="row">{{$count}}</th>
                                            <td>{{$row->erp_category_name}}</td>
                                            <td>{{$row->erp_product_name}}</td>
                                            <td>{{$row->erp_product_code}}</td>
                                            <td>{{$row->erp_product_price}}</td>
                                            <td>{{$row->erp_sales_price}}</td>
                                            <td>
                                                        @if (in_array($extension = pathinfo($row->erp_product_image, PATHINFO_EXTENSION), ['jpg', 'png', 'bmp','jpeg','PNG']))
                                                            <a href="{{asset('ProductImages'.'/'.$row->erp_product_image)}}" target="_blank"  >  <img src="{{asset('ProductImages'.'/'.$row->erp_product_image)}}" height="40px" width="50px"> </a>
                                                            </a>
                                                        @else
                                                            <a href="{{asset('ProductImages'.'/'.$row->erp_product_image)}}" target="_blank"  >     <i class="fa fa-file fa-2x" aria-hidden="true"> </i>
                                                                @endif
                                            </td>
                                            <td><label class="badge badge-{{$row->erp_status == '1' ? 'info':'danger'}}" data-toggle="modal" data-target="#active_inactive">{{$row->erp_status == '1' ? 'Enable':'Disable'}}</label>
                                            </td>
                                            <td>
                                                <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal1{{$row->id}}">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <div class="modal fade" id="exampleModal1{{$row->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="formModal" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="create_questions">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="formModal">Edit Document Type</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                            <div class="card">
                                                                <div class="header">
                                                                    <form action="{{route('products.update',$row->id)}}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <label for="email_address1">Status</label>
                                                                        <div class="row">
                                                                            <div class="col-sm-3 col-lg-3">
                                                                                <div class="form-check form-check-radio">
                                                                                    <label>
                                                                                        <input name="erp_status" {{$row->erp_status=='1'? 'checked': ''}} class="erp_status" type="radio" value="1" />
                                                                                        <span>Enable</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-3 col-lg-3x">
                                                                                <div class="form-check form-check-radio">
                                                                                    <label>
                                                                                        <input name="erp_status" {{$row->erp_status=='0'? 'checked': ''}} class="erp_status" type="radio" value="0" />
                                                                                        <span>Disable</span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <label for="email_address1">Category Name</label>
                                                                        <select id="category" class="form-control" name="erp_category_name">
                                                                            @foreach($bata as $record)
                                                                                <option value="{{$record->erp_category_name}}">{{$record->erp_category_name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        </br>
                                                                        <label for="email_address1">Product Name</label>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" id="email_address1"
                                                                                       class="form-control" name="erp_product_name" value="{{$row->erp_product_name}}"
                                                                                       placeholder="Type Product Name Here">
                                                                            </div>
                                                                        </div>
                                                                        <label for="email_address1">Product Code</label>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" id="email_address1"
                                                                                       class="form-control" name="erp_product_code" value="{{$row->erp_product_code}}"
                                                                                       placeholder="Type Product Code Here">
                                                                            </div>
                                                                        </div>
                                                                        <label for="email_address1">Price</label>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" id="email_address1"
                                                                                       class="form-control" name="erp_product_price" value="{{$row->erp_product_price}}"
                                                                                       placeholder="Type Price Here">
                                                                            </div>
                                                                        </div>
                                                                        <label for="email_address1">Sale Price</label>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" id="email_address1"
                                                                                       class="form-control" name="erp_sales_price" value="{{$row->erp_sales_price}}"
                                                                                       placeholder="Type Sale Price Here">
                                                                            </div>
                                                                        </div>
                                                                        <label for="email_address1">Short Description</label>
                                                                        <div class="form-group">
                                                                            <div class="form-line">
                                                                                <input type="text" id="email_address1"
                                                                                       class="form-control" name="erp_short_description" value="{{$row->erp_short_description}}"
                                                                                       placeholder="Type Short Description Here">
                                                                            </div>
                                                                        </div>
                                                                        <label for="email_address1">Long Description</label>
                                                                        <textarea name="erp_long_description"  class="form-control ckeditor" id="comment_text" cols="30" rows="10">{!!$row->erp_long_description!!}</textarea>
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
                                                                                    <input class="file-path validate" value="{{$row->erp_product_image}}" name="file" type="text">
                                                                                </div>
                                                                                <div class=" container d-flex justify-content-center" >
                                                                                    @if (in_array($extension = pathinfo($row->erp_product_image, PATHINFO_EXTENSION), ['jpg', 'png', 'bmp','jpeg','PNG',]))


                                                                                        <img style="" src="{{asset('ProductImages'.'/'.$row->erp_product_image)}}" height="200px" width="200px">
                                                                                    @elseif($row->erp_product_image == "")

                                                                                    @else
                                                                                        <i class="fa fa-file fa-3x" aria-hidden="true" height="200px" width="200px"> </i>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                        <br>
                                                                        <div class="modal-footer">
                                                                            <button type="submit"
                                                                                    class="btn btn-info waves-effect">Update Products</button>
                                                                        </div>
                                                                    </form>
                                                                </div> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter2{{$row->id}}">
                                                    <i class="material-icons"> delete  </i>
                                                </button>
                                                <div class="modal fade" id="exampleModalCenter2{{$row->id}}" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Delete
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure want to proceed this action?
                                                            </div>
                                                            <div class="modal-footer">

                                                                <button type="submit" class="btn btn-danger waves-effect"
                                                                        data-dismiss="modal">Close</button>
                                                                <form action="{{route('products.destroy',$row->id)}}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="submit" class="btn btn-info waves-effect">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <?php
                                        $count++;
                                        ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

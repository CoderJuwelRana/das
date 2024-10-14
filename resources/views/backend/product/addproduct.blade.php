@extends('backend.layouts.master')
@section('content')

<main class="app-main w-50 mx-auto"> <!--begin::App Content Header-->
            <div class="app-content-header "> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Add Product</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                  Add Product
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div>
            <form action="{{route('storeproduct')}}" method="post" enctype="multipart/form-data"> 
                                    @csrf     <!--begin::Body-->
                                    <div class="card-body">
                                        <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Product Name</label> 
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                                           
                                        </div>
                                        <div class="mb-3"> 
                                        <label for="exampleInputPassword1" class="form-label">Product price</label> 
                                        <input type="number" class="form-control" id="exampleInputPassword1" name="price"> 
                                        </div>
                                        <div class="mb-3"> 
                                        <label for="exampleInputPassword1" class="form-label">Product Image</label> 
                                        <input type="file" class="form-control" id="exampleInputPassword1" name="image"> 
                                        </div>
                                        <div class="mb-3"> 
                                        <label for="exampleInputPassword1" class="form-label">Product Image</label> 
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="description"> 
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="submit">
                                       
                                    </div> <!--end::Body--> <!--begin::Footer-->
                                   
                                </form>
        </main> <!--end::App Main--> <!--begin::Footer-->





@endsection('content')
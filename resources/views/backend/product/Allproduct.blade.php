@extends('backend.layouts.master')
@section('content')

<main class="app-main w-50 mx-auto"> <!--begin::App Content Header-->
            <div class="app-content-header "> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">All Product</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                  All Product
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div>


            <table class="table table-bordered table-striped">
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Description</td>
                    <td>Image</td>
                    <td>Action</td>
                    </tr>


                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <img src="{{asset('uploads/products/'.$product->image)}}" alt="" width="100" height="100">
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('editproduct',['id'=>$product->id])}}">Edit</a>
                            <a class="btn btn-danger" href="{{route('deleteproduct',['id'=>$product->id])}}">Delete</a>
                       

                    </tr>
                    @endforeach

            </table>
      
        </main> <!--end::App Main--> <!--begin::Footer-->





@endsection('content')
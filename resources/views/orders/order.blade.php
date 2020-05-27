@extends('layouts.head')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('orders.store')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="panel panel-headline">
                            <div class="panel-heading">
                                <h3 class="panel-title">Order Information</h3>
                            </div>
                            <div class="panel-body">
                                <p>{{$product->code}} - {{$product->name}}</p>
                                <p>Rp. {{$product->price}}</p>
                                <p>Qty 1</p>
                                <div class="column" style="display: none">
                                    <input type="text" id="name" name="id" value="{{ $product->id}}">
                                    <input type="text" id="price" name="price" value="{{ $product->price}}">
                                </div>
                            </div>
                            <div class="panel-heading mt-4">
                                <h3 class="panel-title">Customer Information</h3>
                            </div>
                            <div class="panel-body">
                                <div class="body">
                                    <div class="form-group">
                                        <label for="" class="">Name</label>
                                        <div class="">
                                            <input type="text" id="" class="form-control" name="" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="">Phone</label>
                                        <div class="">
                                            <input type="text" id="" class="form-control" name="" value=""  required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address" class="">Address</label>
                                        <div class="">
                                            <textarea type="text" id="address" class="form-control" name="" value="" rows="5" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <a href="{{ route('product.home') }}" class="btn btn-secondary col-md-5 my-4 mx-3 py-2">Batal</a>
                                        <button type="submit" class="btn btn-success col-md-6 my-4 py-2 ml-auto mx-3" id="submit">Beli</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

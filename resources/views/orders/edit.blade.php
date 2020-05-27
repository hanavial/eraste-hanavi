@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('orders.update', $order->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="panel panel-headline">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Form</h3>
                            </div>
                            <div class="panel-body mt-3">
                                <div class="body">
                                    <div class="form-group">
                                        <label for="id_product" class="">Name Product</label>
                                        <div class="">
                                            <select name="id_product" id="" class="form-control">
                                                <option value="{{$order->product->id}}">{{$order->product->name}}</option>
                                                @foreach ($product as $p)
                                                    <option value="{{$p['id'] }}">{{$p['name']}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="total" class="">Total</label>
                                        <div class="">
                                            <input type="total" id="total" class="form-control" name="total" value="{{$order->total}}"  required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success col-md-12 my-4 py-2" id="submit">Save</button>
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

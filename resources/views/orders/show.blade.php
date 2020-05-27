@extends('layouts.head')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Success!!!</h3>
                        </div>
                        <div class="panel-body">
                            {{-- <p>{{$order->order_code}}</p> --}}
                            {{-- <p>{{$order['product']['code']}} - {{$order['product']['name']}}</p>
                            <p>Rp. {{$order['total']}}</p>
                            <p>Qty 1</p> --}}
                            <p>Orderan Anda Berhasil silahkan berbelanja lagi</p>
                        </div>
                        <div class="panel-heading mt-4">
                            {{-- <h3 class="panel-title">Customer Information</h3> --}}
                        </div>
                        <div class="panel-body">
                            <div class="body">
                                <div class="row">
                                    <a href="{{ route('product.home') }}" class="btn btn-secondary col-md-11 mx-2 my-4 py-2">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.head')

@section('content')
<div class="container">
    <h3 class="mt-3">Produk</h3>
    <div class="row">
        @foreach ($product as $p)
        <div class="col-md-3 mt-3">
            <div class="card">
                <div class="card-image">
                    <img class="py-2 px-2" src="https://cf.shopee.co.id/file/f276130c80132bb3bb34d0320a92ed6f" width="auto" height="250" alt="">
                </div>
                <div class="card-body">
                    <p>{{$p->code}} - {{$p->name}} </p>
                    <p>{{$p->price}}</p>
                    <a href="{{ route('orders.create', $p->id) }}" class="btn btn-success col-md-12">Beli</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

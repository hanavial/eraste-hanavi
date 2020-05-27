@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading py-3">
                                    <h3>Product</h3>
                                    <a href="{{ route('product.create')}}" class="btn btn-success my-2">Add Product +</a>
                                </div>
                                <div class="panel-body">
                                    <div class="body">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="dt">
                                                <thead>
                                                <tr>
                                                    <th>Code</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {{-- @php
                                                    $total = 0;
                                                    $n = 1;
                                                @endphp --}}
                                                @foreach($product as $p)
                                                    <tr>
                                                        <td>{{ $p->code }}</td>
                                                        <td>{{ $p->name }}</td>
                                                        <td>Rp. {{ $p->price }}</td>
                                                        <td>
                                                            <div class="column">
                                                                <a href="{{ route('product.edit', $p->id) }}" class="btn btn-warning" >Edit</a>
                                                                <a class="btn btn-danger" style="color: white;" data-toggle="modal" data-target="#modelId" onclick="prepare({{$p->id}})">Hapus</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('product.delete', $p->id)}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <input type="hidden" name="id" id="menuid" readonly>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus product <b><span id="nomer">{{$p->name}}</span></b>? Aksi ini tidak dapat di-<i>undo</i>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <input type="submit" value="Hapus" class="btn btn-danger">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

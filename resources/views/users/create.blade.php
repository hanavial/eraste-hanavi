@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.store')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="panel panel-headline">
                            <div class="panel-heading">
                                <h3 class="panel-title">Create Form</h3>
                            </div>
                            <div class="panel-body mt-3">
                                <div class="body">
                                    <div class="form-group">
                                        <label for="name" class="">Name</label>
                                        <div class="">
                                            <input type="text" id="name" class="form-control" name="name" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="">Email</label>
                                        <div class="">
                                            <input type="email" id="email" class="form-control" name="email" value=""  required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="">Password</label>
                                        <div class="">
                                            <input type="password" id="password" class="form-control" name="password" value=""  required>
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

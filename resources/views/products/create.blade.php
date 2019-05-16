@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Product</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/product') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="">Product Name</label>
                                <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid':'' }}" placeholder="Masukkan nama produk">
                                <p class="text-danger">{{ $errors->first('title') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" cols="10" rows="10" class="form-control {{ $errors->has('description') ? 'is-invalid':'' }}"></textarea>
                                <p class="text-danger">{{ $errors->first('description') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Price</label>
                                <input type="number" name="price" class="form-control {{ $errors->has('price') ? 'is-invalid':'' }}">
                                <p class="text-danger">{{ $errors->first('price') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="">Stock</label>
                                <input type="number" name="stock" class="form-control {{ $errors->has('stock') ? 'is-invalid':'' }}">
                                <p class="text-danger">{{ $errors->first('stock') }}</p>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger btn-sm">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

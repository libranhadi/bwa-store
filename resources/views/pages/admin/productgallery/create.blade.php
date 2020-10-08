@extends('layouts.admin', ['title'=> 'Dashboard Admin'])

@section('content')
       <div class="section-content section-dashboard-home">
            <div class="container-fluid">
                    <div class="dashboard-heading">

                        <h2 class="dashboard-title">Tambah Gallery Product</h2>
                        <p class="dashboard-subtitle">This Add Gallery Product</p>
                     </div>

                    <div class="dashboard-content">
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                            <form action="{{ route('product-gallery.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf

<div class="form-group">
    <label for="pemilik">Products Name</label>
    <select name="products_id" id="pemilik" class="form-control">
        <option disabled selected> --Pilih--</option>
        @foreach ($products as $product)
        <option {{ $product->id ==  $productgall->products_id ? 'selected' : ''}} value="{{ $productgall->id }}">{{ $productgall->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="price">Harga</label>
    <input type="number" class="form-control" name="price" value="{{ old("price") ?? $product->price }}">
</div>

<div class="col text-right">
    <button type="submit" class="btn btn-success mt-2"> {{ $submit ?? 'Save Now' }}</button>
</div>
                                            </form>
                                            </div>
                                                </div>
                                        </div>
                                </div>
                            </div>
                    </div>
         </div>
        </div>

@endsection

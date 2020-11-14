@extends('layouts.dashboard', ['title' => 'Product Dashboard'])

@section('content')
          <div class="section-content section-dashboard-home">
          <div class="container-fluid">
            <h2 class="dashboard-title">My Products</h2>
            <p class="dashboard-subtitle">Manage it well and get money</p>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-12">
                  <a href="{{ route("dashboard-create") }}" type="submit" class="btn btn-success">
                    Add New Product
                  </a>
                </div>
              </div>
              <div class="row mt-4">
                @foreach ($products as $product)
                    
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <a href="{{ route("dashboard-product-detail") }}" class="card card-dashboard-product d-block">
                    <div class="card-body">
                    <img src="{{ Storage::url($product->galleries->first()->photo) }}" alt="product" class="dashboard-product-content w-75 mb-2" />
                      <div class="product-title">{{ $product->name }}</div>
                      <div class="product-category">{{ $product->category->name }}</div>
                    </div>
                  </a>

                </div>
                @endforeach
             


              </div>
            </div>
          </div>
        </div>
@endsection

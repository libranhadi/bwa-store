@extends('layouts.dashboard', ['title' => 'Product Dashboard'])

@section('content')
          <div class="section-content section-dashboard-home">
          <div class="container-fluid">
            <h2 class="dashboard-title">My Products</h2>
            <p class="dashboard-subtitle">Manage it well and get money</p>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-12">
                  <a href="dashboard-create-product.html" type="submit" class="btn btn-success">
                    Add New Product
                  </a>
                </div>
              </div>
              <div class="row mt-4">

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <a href="dashboard-product-details.html" class="card card-dashboard-product d-block">
                    <div class="card-body">
                    <img src="{{ url("images/product-card-1.png") }}" alt="product" class="dashboard-product-content w-100 mb-2" />
                      <div class="product-title">Shirup Marzan</div>
                      <div class="product-category">Foods</div>
                    </div>
                  </a>

                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <a href="dashboard-product-details.html" class="card card-dashboard-product d-block">
                    <div class="card-body">
                    <img src="{{ url("images/product-card-1.png") }}" alt="product" class="dashboard-product-content w-100 mb-2" />
                      <div class="product-title">Shirup Marzan</div>
                      <div class="product-category">Foods</div>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <a href="dashboard-product-details.html" class="card card-dashboard-product d-block">
                    <div class="card-body">
                    <img src="{{ url("images/product-card-1.png") }}" alt="product" class="dashboard-product-content w-100 mb-2" />
                      <div class="product-title">Shirup Marzan</div>
                      <div class="product-category">Foods</div>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <a href="dashboard-product-details.html" class="card card-dashboard-product d-block">
                    <div class="card-body">
                    <img src="{{ url("images/product-card-1.png") }}" alt="product" class="dashboard-product-content w-100 mb-2" />
                      <div class="product-title">Shirup Marzan</div>
                      <div class="product-category">Foods</div>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <a href="dashboard-product-details.html" class="card card-dashboard-product d-block">
                    <div class="card-body">
                    <img src="{{ url("images/product-card-1.png") }}" alt="product" class="dashboard-product-content w-100 mb-2" />
                      <div class="product-title">Shirup Marzan</div>
                      <div class="product-category">Foods</div>
                    </div>
                  </a>
                </div>



              </div>
            </div>
          </div>
        </div>
@endsection

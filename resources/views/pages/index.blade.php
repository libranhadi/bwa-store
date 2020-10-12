@extends('layouts.app', ['title' => 'Home'])
@section('content')
    <div class="page-content page-home">
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    class="active"
                    data-target="#storeCarousel"
                    data-slide-to="0"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="images/banner.jpg"
                      alt="Banner"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="images/banner.jpg"
                      alt="Banner"
                      class="d-block w-100"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="images/banner.jpg"
                      alt="Banner"
                      class="d-block w-100"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Trend Categories</h5>
            </div>
          </div>
          <div class="row">
            @php  $increment= 0 @endphp
               @forelse ($categories as $category)
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="{{ $increment+= 100 }}"
            >
              <a href="{{ route('categories.detail', $category->slug) }}" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="{{ Storage::url($category->photo) }}"
                    alt="categories-gadget"
                    class="w-100"
                  
                  />
                </div>
                <p class="categories-text">
                  {{ $category->name }}
                </p>
              </a>
            </div>
            @empty
                <div class="col-12 text-center py-5">
                  Kosong
                </div>
            @endforelse
         </div>
         
        </div>
      </section>
      <section class="store-new-product">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>New Product</h5>
            </div>
          </div>
         <div class="row">
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="details.html" class="components-products d-block">
                <div class="product-thumbnail">
                  <div
                    class="product-image"
                    style="
                      background-image: url('/images/products-apple-watch.jpg');
                    "
                  ></div>
                </div>
                <div class="product-text">
                  Apple Watch 4
                </div>
                <div class="product-price">
                  $900
                </div>
              </a>
            </div>
         </div>
        </div>
      </section>
 
    </div>
@endsection
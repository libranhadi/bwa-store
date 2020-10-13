@extends('layouts.app' , ['title' => 'Category' ])
@section('content')
      <div class="page-content page-home">
      <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Categories</h5>
            </div>
          </div>
         <div class="row">
           @php
              $incrementCategory = 0
           @endphp
          @forelse ($categories as $category)
              
          
          <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementCategory+= 100 }}"
            >
              <a href="{{ route('categories.detail' , $category->slug) }}" class="component-categories d-block">
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
               
           @endforelse
         </div>
        </div>
      </section>
      <section class="store-new-product">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>All Product</h5>
            </div>
          </div>
          <div class="row">
            @php
                $incrementProduct = 0
            @endphp
            @forelse ($products as $product)
                
      
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementProduct+= 100 }}"
            >
              <a href="{{ route("details") }}" class="components-products d-block">
                <div class="product-thumbnail">
                  <div
                    class="product-image"
                    style="
                    @if($product->galleries)
                      background-image: url('{{ Storage::url($product->galleries->first()->photo) }}');
                    @else
                    background-color : #eee
                    @endif
                    "
                  ></div>
                </div>
                <div class="product-text">
                  {{$product->name  }}
                </div>
                <div class="product-price">
                  ${{ $product->price }}
                </div>
              </a>
            </div>
            @empty
                
            @endforelse
           
          </div>
        </div>
      </section>
      
    </div>
@endsection


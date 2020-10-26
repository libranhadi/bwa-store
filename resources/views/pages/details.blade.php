@extends('layouts.detail', ['title' => 'Detail'])
@section('content')

     <div class="page-content page-details">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Products Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <section class="store-gallery" id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-8" data-aos="zoom-in">
            <transition name="slide-fade" mode="out-in">
              <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" alt="galleryPhoto"
                class="w-100 main-image" />
            </transition>
          </div>
          <div class="col-lg-2">
            <div class="row">
              <div class="col-3 col-lg-12 mt-1 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id"
                data-aos="zoom-in" data-aos-delay="100">
                <a href="#" @click="changeActive(index)">
                  <img :src="photo.url" class="w-100 thumbnail-image" :class="{active: index == activePhoto}
                      " alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="store-details-container">
      <section class="store-heading" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h1>{{ $product->name }}</h1>
              <div class="owner">{{ $product->user->name }}</div>
              <div class="price">${{ number_format($product->price) }}</div>
            </div>
            @auth
            <form action="{{ route('details-product-add', $product->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
       
              <button type="submit" class="btn btn-success px-4 text-white btn-block mb-3">Add To Cart</button>
       
            </form>

            @else
             <div class="col-lg-2">
              <a href="{{ route('login') }}" class="btn btn-success px-4 text-white btn-block mb-3">Sign In</a>
            </div>
                @endauth
          
          </div>
        </div>
      </section>
      <section class="store-description mt-4" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-12">
             {!! $product->description!!}
            </div>
          </div>
        </div>
      </section>
      <section class="store-review">
        <div class="container">
          <div class="row" data-aos="fade-up">
            <div class="col-12 col-lg-8 mt-3 mb-2">
              <strong>
                <h5>Customer Review (3)</h5>
              </strong>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8 mt-2">
              <ul class="list-unstyled" data-aos="fade-left" data-aos-delay="300">
                <li class="media mb-2">
                  <img src="/images/icon-testimonial-1.png" class="mr-3 rounded-circle mt-2" alt="..." />
                  <div class="media-body">
                    <h5 class="mt-2">Hazza Risky</h5>
                    I thought it was not good for living room. I really happy
                    to decided buy this product last week now feels like
                    homey.
                  </div>
                </li>
                <li class="media mb-2">
                  <img src="/images/icon-testimonial-2.png" class="mr-3 rounded-circle mt-2" alt="..." />
                  <div class="media-body">
                    <h5 class="mt-2">Anna Suki</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel
                    metus.
                  </div>
                </li>
                <li class="media mb-2">
                  <img src="/images/icon-testimonial-3.png" class="mr-3 rounded-circle mt-2" alt="..." />
                  <div class="media-body">
                    <h5 class="mt-2">Flamingo</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel
                    metus scelerisque ante sollicitudin. Cras purus odio,
                    vestibulum in vulputate at, tempus viverra turpis. Fusce
                    condimentum nunc ac nisi vulputate fringilla. Donec
                    lacinia congue felis in faucibus.
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>

  </div>
  

@endsection
@push('after-script')
     <script>
    var gallery = new Vue({
      el: "#gallery",
      mounted() {
        AOS.init();
      },
      data: {
        activePhoto: 0,
        photos: [
            @foreach($product->galleries as $gallery)
          {
            id: {{ $gallery->id }},
            url: "{{ Storage::url($gallery->photo) }}",
          },
         @endforeach
        ],
      },
      methods: {
        changeActive(id) {
          this.activePhoto = id;
        },
      },
    });
  </script>
@endpush
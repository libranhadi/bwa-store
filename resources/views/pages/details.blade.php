@extends('layouts.detail', ['title' => 'Detail'])
@section('content')

     <div class="page-content page-details">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
              <h1>Sofa Ternyamam</h1>
              <div class="owner">Libran Hadi</div>
              <div class="price">$800</div>
            </div>
            <div class="col-lg-2">
              <a href="cart.html" class="btn btn-success px-4 text-white btn-block mb-3">Add To Cart</a>
            </div>
          </div>
        </div>
      </section>
      <section class="store-description mt-4" data-aos="fade-up">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-12">
              <p>
                The Nike Air Max 720 SE goes bigger than ever before with
                Nike's tallest Air unit yet for unimaginable, all-day comfort.
                There's super breathable fabrics on the upper, while colours
                add a modern edge.
              </p>
              <p>
                Bring the past into the future with the Nike Air Max 2090, a
                bold look inspired by the DNA of the iconic Air Max 90.
                Brand-new Nike Air cushioning underfoot adds unparalleled
                comfort while transparent mesh and vibrantly coloured details
                on the upper are blended with timeless OG features for an
                edgy, modernised look.
              </p>
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
        activePhoto: 2,
        photos: [
          {
            id: 1,
            url: "/images/product-details-1.jpg",
          },
          {
            id: 2,
            url: "/images/product-details-2.jpg",
          },
          {
            id: 3,
            url: "/images/product-details-3.jpg",
          },
          {
            id: 4,
            url: "/images/product-details-4.jpg",
          },
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
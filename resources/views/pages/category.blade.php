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
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-gadgets.svg"
                    alt="categories-gadget"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Gadgets
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-furniture.svg"
                    alt="categories-gadget"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Furniture
                </p>
              </a>
            </div>

            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-makeup.svg"
                    alt="categories-gadget"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Make Up
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-sneaker.svg"
                    alt="categories-gadget"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Sneakers
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-tools.svg"
                    alt="categories-gadget"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Tools
                </p>
              </a>
            </div>
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="" class="component-categories d-block">
                <div class="categories-image">
                  <img
                    src="/images/categories-baby.svg"
                    alt="categories-gadget"
                    class="w-100"
                  />
                </div>
                <p class="categories-text">
                  Baby
                </p>
              </a>
            </div>
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
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <a href="{{ route("details") }}" class="components-products d-block">
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
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <a href="/details.html" class="components-products d-block">
                <div class="product-thumbnail">
                  <div
                    class="product-image"
                    style="
                      background-image: url('/images/products-orange-bogotta.jpg');
                    "
                  ></div>
                </div>
                <div class="product-text">
                  Orange Bogotta
                </div>
                <div class="product-price">
                  $900
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <a href="/details.html" class="components-products d-block">
                <div class="product-thumbnail">
                  <div
                    class="product-image"
                    style="
                      background-image: url('/images/products-sofa-ternyaman.jpg');
                    "
                  ></div>
                </div>
                <div class="product-text">
                  Sofa Ternyaman
                </div>
                <div class="product-price">
                  $900
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="400"
            >
              <a href="/details.html" class="components-products d-block">
                <div class="product-thumbnail">
                  <div
                    class="product-image"
                    style="
                      background-image: url('/images/products-bubuk-maketti.jpg');
                    "
                  ></div>
                </div>
                <div class="product-text">
                  Bubuk Maketti
                </div>
                <div class="product-price">
                  $900
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="500"
            >
              <a href="/details.html" class="components-products d-block">
                <div class="product-thumbnail">
                  <div
                    class="product-image"
                    style="
                      background-image: url('/images/products-tatakan-gelas.jpg');
                    "
                  ></div>
                </div>
                <div class="product-text">
                  Tatakan Gelas
                </div>
                <div class="product-price">
                  $900
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="600"
            >
              <a href="/details.html" class="components-products d-block">
                <div class="product-thumbnail">
                  <div
                    class="product-image"
                    style="
                      background-image: url('/images/products-mavic-kawe.jpg');
                    "
                  ></div>
                </div>
                <div class="product-text">
                  Mavic Kawe
                </div>
                <div class="product-price">
                  $900
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="700"
            >
              <a href="/details.html" class="components-products d-block">
                <div class="product-thumbnail">
                  <div
                    class="product-image"
                    style="
                      background-image: url('/images/products-black-edition-nike.jpg');
                    "
                  ></div>
                </div>
                <div class="product-text">
                  Black Edition Nike
                </div>
                <div class="product-price">
                  $900
                </div>
              </a>
            </div>
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="800"
            >
              <a href="/details.html" class="components-products d-block">
                <div class="product-thumbnail">
                  <div
                    class="product-image"
                    style="
                      background-image: url('/images/products-monkey-toys.jpg');
                    "
                  ></div>
                </div>
                <div class="product-text">
                  Monkey Toys
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


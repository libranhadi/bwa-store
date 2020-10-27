
@extends('layouts.detail', ['title' => 'Cart'])


@section('content')
   
<div class="page-content page-cart">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Cart
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table class="table table-borderless table-cart">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Name &amp; Seller</th>
                    <th>Price</th>
                    <th>Menu</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($carts as $cart)
                      
                  <tr>
                    <td style="width: 20%">
                      <img
                        src="{{ Storage::url($cart->product->galleries->first()->photo) }}"
                        alt=""
                        class="cart-image w-100"
                      />
                    </td>
                    <td style="width: 30%">
                      <div class="product-title">{{ $cart->name }}</div>
                      <div class="product-subtitle">{{ $cart->users->name  }}</div>
                    </td>
                    <td style="width: 20%">
                      <div class="product-title">${{ number_format($cart->product->price) }}</div>
                      <div class="product-subtitle">USD</div>
                    </td>
                    <td>
                      <form action="{{ route('delete-cart', $cart->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-remove-cart">Remove</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                
                </tbody>
              </table>
            </div>
          </div>
          <div class="row" data-aos-delay="150" data-aos="fade-up">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h5 class="mb-4">Shipping-details</h5>
            </div>
          </div>
          <div class="row mb-4" data-aos-delay="200" data-aos="fade-up">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Address 1</label>
                <input
                  type="text"
                  name="addressOne"
                  id="addressOne"
                  class="form-control"
                  value="Setra Duta Cemara"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Address 2</label>
                <input
                  type="text"
                  name="addressOne"
                  id="addressOne"
                  class="form-control"
                  value="Blok B2 No. 34"
                />
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="Province">Province</label>
                <select name="province" id="province" class="form-control">
                  <option value="">Jawa Barat</option>
                  <option value="">Jawa Tengah</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" class="form-control">
                  <option value="">Bandung</option>
                  <option value="">Surabaya</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="postalCode">Postal Code</label>
                <input
                  type="text"
                  name="postalCode"
                  id="postalCode"
                  class="form-control"
                  value="2122322"
                />
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Country</label>
                <input
                  type="text"
                  name="country"
                  id="country"
                  class="form-control"
                  value="Indonesia"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="Mobile">Mobile Phone</label>
                <input
                  type="text"
                  name="phone"
                  id="Mobile"
                  class="form-control"
                  value="0812323xxxx"
                />
              </div>
            </div>
          </div>
          <div class="row" data-aos-delay="250" data-aos="fade-up">
            <div class="col-12">
              <h5 class="mb-4">Payment Information</h5>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="300">
            <div class="col-4 col-md-3">
              <div class="product-title">$10</div>
              <div class="product-subtitle">Country Fox</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">$280</div>
              <div class="product-subtitle">Product Insurence</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">$580</div>
              <div class="product-subtitle">Ship To Jakarta</div>
            </div>
            <div class="col-4 col-md-2">
              <div class="product-title">$392,409</div>
              <div class="product-subtitle">Total</div>
            </div>
            <div class="col-8 col-md-3">
              <a
                href="/success.html"
                class="btn btn-success mt-1 px-4 btn-block"
                >Checkout Now</a
              >
            </div>
          </div>
        </div>
      </section>

     
    </div>
@endsection

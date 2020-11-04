
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
          @php
              $totalprice = 0
          @endphp
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
                      <div class="product-title">{{ $cart->product->name }}</div>
                      <div class="product-subtitle">{{ $cart->users->store_name  }}</div>
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
                @php
                    $totalprice += $cart->product->price
                @endphp
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
          <form action="{{ route('checkout') }}" method="post" id="checkout">
            @csrf
            <input type="hidden" name="total_price" value="{{ $totalprice}}">
          <div class="row mb-4" data-aos-delay="200" data-aos="fade-up">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Address One</label>
                <input
                  type="text"
                  name="address_one"
                  id="address_one"
                  class="form-control"
                  value="Setra Duta Cemara"
                />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Address two</label>
                <input
                  type="text"
                  name="address_two"
                  id="address_two"
                  class="form-control"
                  value="Blok B2 No. 34"
                />
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label for="provinces_id">Provinces</label>
                <select name="provinces_id" id="provinces_id" class="form-control" v-if="provinces" v-model = 'provinces_id'>
                <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>

                </select>
                <select v-else="" id="" class="form-control"></select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="regencies_id">City</label>
                <select name="regencies_id" id="regencies_id" class="form-control" v-if="regencies" v-model = 'regencies_id'>
                <option v-for="regency in regencies" :value="regencies.id">@{{ regency.name }}</option>
               
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="zip_code">Postal Code</label>
                <input
                  type="text"
                  name="zip_code"
                  id="zip_code"
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
                <label for="Phone_number">Phone</label>
                <input
                  type="text"
                  name="phone_number"
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
              <div class="product-title">${{ number_format($totalprice) }}</div>
              <div class="product-subtitle">Total Price</div>
            </div>
            <div class="col-8 col-md-3">
              <button
              type="submit"
                class="btn btn-success mt-1 px-4 btn-block"
                >Checkout Now</button>
            </div>
          </div>
              </form>
        </div>
      </section>

     
    </div>
@endsection
@push('after-script')
       <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
       <script>
         var checkout = new Vue ({
           el : "#checkout",
           mounted(){
             AOS.init();
             this.getProvincesData();
           },
           data : {
            provinces : null,
            regencies : null,
            provinces_id : null, 
            regencies_id : null
           },
           methods : {
             getProvincesData()  {
               var self = this;
               axios.get('{{ route('api-provinces') }}') 
                .then(function(response){
                  self.provinces = response.data;
                })
               },
               getRegenciesData(){
                 var self = this;
                 axios.get('{{ url('api/regencies') }}/' + self.provinces_id )
                 .then(function(response){
                   self.regencies = response.data;
                 })
               },
           },
           watch : {
            provinces_id: function(val, oldval){
              this.regencies_id = null;
              this.getRegenciesData();
            }
           }, 
         })
       </script>
@endpush
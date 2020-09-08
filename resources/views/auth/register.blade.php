@extends('layouts.auth', ['title' => 'regist'])

@section('content')
   <div class="page-content page-auth" id="register">
      <div class="section-store-auth" data-aos="zoom-in">
        <div class="container">
          <div
            class="row align-items-center justify-content-center row-login ml-3"
          >
            <div class="col-lg-4">
              <h2>Memulai untuk jual beli dengan cara terbaru</h2>
              <form action="" class="mt-4">
                <div class="form-group">
                  <label for="nama">Full Name</label>
                  <input
                    type="text"
                    name="name"
                    id="nama"
                    class="form-control is-valid"
                    v-model="name"
                    autofocus
                  />
                </div>
                <div class="form-group">
                  <label for="email">E-mail Address*</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-control is-invalid"
                    v-model="email"
                  />
                </div>
                <div class="form-group">
                  <label for="email">Password</label>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control"
                  />
                </div>
                <div class="form-group">
                  <label for="">Store</label>
                  <p class="text-muted">Apakah Anda Ingin Membuka Toko ?</p>

                  <div
                    class="custom-control custom-radio custom-control-inline"
                  >
                    <input
                      type="radio"
                      name="is_store_open"
                      id="openStoreTrue"
                      class="custom-control-input"
                      v-model="is_store_open"
                      :value="true"
                    />
                    <label for="openStoreTrue" class="custom-control-label">
                      iya, boleh
                    </label>
                  </div>

                  <div
                    class="custom-control custom-radio custom-control-inline"
                  >
                    <input
                      type="radio"
                      name="is_store_open"
                      id="openStoreFalse"
                      class="custom-control-input"
                      v-model="is_store_open"
                      :value="false"
                    />
                    <label for="openStoreFalse" class="custom-control-label">
                      Tidak, Makasih
                    </label>
                  </div>
                </div>
                <div class="form-group" v-if="is_store_open">
                  <label for="namaToko">Nama Toko</label>
                  <input
                    type="text"
                    name="namaToko"
                    id="namaToko"
                    class="form-control"
                  />
                </div>
                <div class="form-group" v-if="is_store_open">
                  <label for="category">Category</label>
                  <select name="category" id="category" class="form-control">
                    <option value="" disabled>ya</option>
                    <option value="">ya</option>
                    <option value="">tidak</option>
                  </select>
                </div>
                <a href="" class="btn btn-success mt-4 btn-block"
                  >Sign Up Now
                </a>
                <a href="" class="btn btn-signup mt-4 btn-block"
                  >Back To Sign In</a
                >
              </form>
            </div>
          </div>
        </div>
      </div>
     
    </div>
<div class="container" style="display: none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-script')
      <script>
      Vue.use(Toasted);
      var register = new Vue({
        el: "#register",
        mounted() {
          AOS.init();
          this.$toasted.error("Maaf Email Anda Sudah Terdaftar!", {
            position: "top-center",
            className: "rounded",
            duration: 1000,
          });
        },
        data: {
          name: "Libran Hadi Saputra",
          email: "libranHs@gmail.com",
          password: "",
          is_store_open: true,
          namaToko: "",
        },
      });
    </script>
@endpush

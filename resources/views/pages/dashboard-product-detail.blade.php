@extends('layouts.dashboard', ['title' => 'Details'])

@section('content')
      <div class="section-content section-dashboard-home">
            <div class="container-fluid">
              <h2 class="dashboard-title">Shirup Marzan</h2>
              <p class="dashboard-subtitle">Product Details</p>
               @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                          <li>
                            {{ $error }}
                          </li>
                      @endforeach
                    </ul>
                  </div>
              @endif
              <div class="dashboard-content">
                <div class="row mt-3">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <form action="{{ route('dashboard-product-update' , $product->id) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                          <div class="row">
                            <div class="col-6">
                              <div class="form-group">
                                <label for="nameProduct">Product Name</label>
                                <input
                                  type="text"
                                  name="name"
                                  id="name Product"
                                  class="form-control"
                                  value="{{ $product->name }}"
                                />
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label for="priceProduct">Price</label>
                                <input
                                  type="number"
                                  name="price"
                                  id="priceProduct"
                                  class="form-control"
                                  value="{{ $product->price }}"
                                />
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <label for="category">Category</label>
                                <select
                                  name="categories_id"
                                  id="caetgory"
                                  class="form-control"
                                  >
                                  <option value="Foods" disabled>-- Pilih Category--</option>
                                  @foreach ($category as $item)
                                      <option {{$item->id == $product->categories_id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <label for="description">Description</label>
                                <textarea
                                  name="description"
                                  id="editor"
                                  class="form-control"
                                value="{!! $product->description !!}"
                                ></textarea>
                              </div>
                            </div>

                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-5 btn-block"
                              >
                                Update Now
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mt-2">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          @foreach ($product->galleries as $gallery)
                              
                          <div class="col-md-4">
                            <div class="gallery-container">
                              <img
                                src= {{  Storage::url($gallery->photo ?? '')}}
                                class="w-100"
                                alt=""
                              />
                              <a href="{{ route('dashboard-product-delete' , $gallery->id) }}" class="delete-gallery">
                                <img src= {{  url("images/icon-delete.svg")}} alt="" />
                              </a>
                            </div>
                          </div>
                          @endforeach
                        
                          <div class="col-12 mt-3">
                           <form action="{{ route('dashboard-product-update-gallery', $product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="products_id" value="{{ $product->id }}">
                             <input
                              type="file"
                              name="photo"
                              id="file"
                              style="display: none"
                              onchange="form.submit()"
                            />
                            <button
                              type="button"
                              class="btn btn-secondary btn-block"
                              onclick="thisFileUpload()"
                            >
                              ADD PHOTO
                            </button>
                          </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
@push('after-script')
       <script>
      function thisFileUpload() {
        document.getElementById("file").click();
      }
    </script>
@endpush
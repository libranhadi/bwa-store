@extends('layouts.dashboard', ['title' => 'Details'])

@section('content')
      <div class="section-content section-dashboard-home">
            <div class="container-fluid">
              <h2 class="dashboard-title">Shirup Marzan</h2>
              <p class="dashboard-subtitle">Product Details</p>
              <div class="dashboard-content">
                <div class="row mt-3">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <form action="">
                          <div class="row">
                            <div class="col-6">
                              <div class="form-group">
                                <label for="nameProduct">Product Name</label>
                                <input
                                  type="text"
                                  name="nameProduct"
                                  id="name Product"
                                  class="form-control"
                                  value="Fanta"
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
                                  value="$1000"
                                />
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <label for="category">Category</label>
                                <select
                                  name="categpry"
                                  id="caetgory"
                                  class="form-control"
                                >
                                  <option value="Foods" disabled>Foods</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <label for="description">Description</label>
                                <textarea
                                  name="editor"
                                  id=""
                                  class="form-control"
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
                          <div class="col-md-4">
                            <div class="gallery-container">
                              <img
                                src= {{  url("images/product-card-1.png")}}
                                class="w-100"
                                alt=""
                              />
                              <a href="" class="delete-gallery">
                                <img src= {{  url("images/icon-delete.svg")}} alt="" />
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="gallery-container">
                              <img
                                src= {{  url("images/product-card-2.png")}}
                                class="w-100"
                                alt=""
                              />
                              <a href="" class="delete-gallery">
                                <img src= {{  url("images/icon-delete.svg")}} alt="" />
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="gallery-container">
                              <img
                                src= {{  url("images/product-card-3.png")}}
                                class="w-100"
                                alt=""
                              />
                              <a href="" class="delete-gallery">
                                <img src= {{  url("images/icon-delete.svg")}} alt="" />
                              </a>
                            </div>
                          </div>
                          <div class="col-12 mt-3">
                            <input
                              type="file"
                              name="file"
                              id="file"
                              style="display: none"
                              multiple
                            />
                            <button
                              type="submit"
                              class="btn btn-secondary btn-block"
                              onclick="thisFileUpload()"
                            >
                              ADD PHOTO
                            </button>
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
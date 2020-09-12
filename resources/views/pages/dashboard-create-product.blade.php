@extends('layouts.dashboard', ['title'=> 'ADD NEW PRODUCT'])

@section('content')
     <div class="section-content section-dashboard-home">
            <div class="container-fluid">
              <h2 class="dashboard-title">Store Settings</h2>
              <p class="dashboard-subtitle">Make store that profitable</p>
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
                            <div class="col-12 mt-1">
                              <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <input
                                  type="file"
                                  name="thumbnail"
                                  id="thumbnail"
                                  class="form-control"
                                />
                                <p class="text-muted">
                                  Anda Bisa Memilih Lebih Dari 1 File
                                </p>
                              </div>
                            </div>

                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success btn-block"
                              >
                                Save now
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
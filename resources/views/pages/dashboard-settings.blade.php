@extends('layouts.dashboard', ['title' => 'Dashboard Settings'])
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
                                <label for="namaToko">Store Name</label>
                                <input
                                  type="text"
                                  name="namaToko"
                                  id="namaToko"
                                  class="form-control"
                                  value="papel la casa"
                                />
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label for="namaToko">Store Name</label>
                                <select
                                  name="category"
                                  id=""
                                  class="form-control"
                                >
                                  <option value="" disabled>Oncom</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label for="">Store</label>
                                <p class="text-muted">
                                  Apakah Anda Ingin Membuka Toko ?
                                </p>
                                <div
                                  class="custom-control custom-radio custom-control-inline"
                                >
                                  <input
                                    type="radio"
                                    name="is_store_open"
                                    id="openStoreTrue"
                                    class="custom-control-input"
                                    value="true"
                                  />
                                  <label
                                    for="openStoreTrue"
                                    class="custom-control-label"
                                  >
                                    Buka!
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
                                    value="false"
                                  />
                                  <label
                                    for="openStoreFalse"
                                    class="custom-control-label"
                                  >
                                    Tutup Sementara!
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-right">
                              <button class="btn btn-success px-4">
                                Save Now
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
@endsection
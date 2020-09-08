@extends('layouts.dashboard', ['title' => 'Account'])
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
                          <div class="row mb-4">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="name">Your Name</label>
                                <input
                                  type="text"
                                  name="name"
                                  id="name"
                                  class="form-control"
                                  value="libran"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="email">Your email</label>
                                <input
                                  type="email"
                                  name="email"
                                  id="email"
                                  class="form-control"
                                  value="saputra@gmail.com"
                                />
                              </div>
                            </div>
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
                                <select
                                  name="province"
                                  id="province"
                                  class="form-control"
                                >
                                  <option value="">Jawa Barat</option>
                                  <option value="">Jawa Tengah</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="city">City</label>
                                <select
                                  name="city"
                                  id="city"
                                  class="form-control"
                                >
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
                          <div class="row">
                            <div class="col text-right">
                              <button
                                type="submit"
                                class="btn btn-success px-4"
                              >
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
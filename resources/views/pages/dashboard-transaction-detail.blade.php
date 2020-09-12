@extends('layouts.dashboard', ['title' => 'Transaction Detail'])
@section('content')
    <div class="section-content section-dashboard-home">
            <div class="container-fluid">
              <h2 class="dashboard-title">#STORE0839</h2>
              <p class="dashboard-subtitle">Transactions Details</p>
              <div class="dashboard-content" id="transactionsDetails">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12 col-md-4">
                            <img
                              src="/images/product-details-2.jpg"
                              alt=""
                              class="w-100"
                            />
                          </div>

                          <div class="col-12 col-md-8">
                            <div class="row ml-2">
                              <div class="col-6 col-md-6">
                                <div class="product-title">Customer Name</div>
                                <div class="product-subtitle">
                                  Libran Hadi Saputra
                                </div>
                              </div>
                              <div class="col-6 col-md-6">
                                <div class="product-title">Product Name</div>
                                <div class="product-subtitle">
                                  shirup marzan
                                </div>
                              </div>
                              <div class="col-6 col-md-6">
                                <div class="product-title">
                                  Date Of Transactions
                                </div>
                                <div class="product-subtitle">20-09-2020</div>
                              </div>
                              <div class="col-6 col-md-6">
                                <div class="product-title">Payment Status</div>
                                <div class="product-subtitle text-danger">
                                  Pending
                                </div>
                              </div>
                              <div class="col-6 col-md-6">
                                <div class="product-title">Total Amount</div>
                                <div class="product-subtitle">$208,904</div>
                              </div>
                              <div class="col-6 col-md-6">
                                <div class="product-title">Mobile</div>
                                <div class="product-subtitle">
                                  +62 0818 8222
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <h5>Shipping Information</h5>
                          </div>

                          <div class="col-12">
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">Address 1</div>
                                <div class="product-subtitle">
                                  Setra Duta Cemara
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Address 2</div>
                                <div class="product-subtitle">
                                  Blok b-18 Depok
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Province</div>
                                <div class="product-subtitle">West Java</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">City</div>
                                <div class="product-subtitle">Depok</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Postal Code</div>
                                <div class="product-subtitle">16016</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Country</div>
                                <div class="product-subtitle">Indonesia</div>
                              </div>
                              <div class="col-12 col-md-3">
                                <div class="product-title">
                                  Status Transaction
                                </div>

                                <select
                                  name="status"
                                  id="status"
                                  class="form-control"
                                  v-model="status"
                                >
                                  <option value="PENDING">Pending</option>
                                  <option value="SHIPPING">Shipping</option>
                                  <option value="SUCCESS">Success</option>
                                </select>
                              </div>
                              <template v-if="status == 'SHIPPING' ">
                                <div class="col-md-3">
                                  <div class="product-title">Input Resi</div>

                                  <input
                                    type="text"
                                    class="form-control"
                                    v-model="resi"
                                  />
                                </div>
                                <div class="col-md-2">
                                  <button
                                    type="submit"
                                    class="btn btn-success btn-block mt-4"
                                  >
                                    Update Resi
                                  </button>
                                </div>
                              </template>
                            </div>
                            <div class="row mt-4">
                              <div class="col-12 text-right">
                                <button
                                  type="submit"
                                  class="btn btn-success btn-lg"
                                >
                                  Save Now
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
            </div>
          </div>
@endsection
@push('after-script')
        <script>
      var transactionsDetails = new Vue({
        el: "#transactionsDetails",

        data: {
          status: "SHIPPING",
          resi: "b23843284",
        },
      });
    </script>
@endpush
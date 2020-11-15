@extends('layouts.dashboard', ['title' => 'Transaction Detail'])
@section('content')
    <div class="section-content section-dashboard-home">
            <div class="container-fluid">
              <h2 class="dashboard-title">{{ $transaction->transaction->code }}</h2>
              <p class="dashboard-subtitle">Transactions Details</p>
              <div class="dashboard-content" id="transactionsDetails">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12 col-md-4">
                            <img
                              src="{{ Storage::url($transaction->product->galleries->first()->photo) }}"
                              alt=""
                              class="w-100"
                            />
                          </div>

                          <div class="col-12 col-md-8">
                            <div class="row ml-2">
                              <div class="col-6 col-md-6">
                                <div class="product-title">Customer Name</div>
                                <div class="product-subtitle">
                                  {{ $transaction->transaction->user->name }}
                                </div>
                              </div>
                              <div class="col-6 col-md-6">
                                <div class="product-title">Product Name</div>
                                <div class="product-subtitle">
                                  {{ $transaction->product->name }}
                                </div>
                              </div>
                              <div class="col-6 col-md-6">
                                <div class="product-title">
                                  Date Of Transactions
                                </div>
                                <div class="product-subtitle">{{ $transaction->created_at }}</div>
                              </div>
                              <div class="col-6 col-md-6">
                                <div class="product-title">Payment Status</div>
                                <div class="product-subtitle text-danger">
                                  {{ $transaction->shipping_status }}
                                </div>
                              </div>
                              <div class="col-6 col-md-6">
                                <div class="product-title">Total Amount</div>
                                <div class="product-subtitle">${{ number_format($transaction->price) }}</div>
                              </div>
                              <div class="col-6 col-md-6">
                                <div class="product-title">Mobile</div>
                                <div class="product-subtitle">
                                  {{ $transaction->transaction->user->phone_number ?? '(-)' }}
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
                                  {{ $transaction->transaction->user->address_one ?? '-'}}
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Address 2</div>
                                <div class="product-subtitle">
                                  {{ $transaction->transaction->user->addres_two ?? '-'}}
                                </div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Province</div>
                                <div class="product-subtitle">
                                  {{ App\Models\Province::find($transaction->transaction->user->provinces_id)}}
                              

                                </div>
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
@extends('layouts.dashboard', ['title' => 'Transaction'])
@section('content')
      <!-- section Content -->
          <div class="section-content section-dashboard-home">
            <div class="container-fluid">
              <h2 class="dashboard-title">Transactions</h2>
              <p class="dashboard-subtitle">
                Big result start from the small one
              </p>
              <div class="dashboard-content">
                <div class="row-mt-3">
                  <div class="col-12 mt-2">
                    <ul
                      class="nav nav-pills mb-3"
                      id="pills-tab"
                      role="tablist"
                    >
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link active"
                          id="pills-home-tab"
                          data-toggle="pill"
                          href="#pills-home"
                          role="tab"
                          aria-controls="pills-home"
                          aria-selected="true"
                          >Sell Product</a
                        >
                      </li>
                      <li class="nav-item" role="presentation">
                        <a
                          class="nav-link"
                          id="pills-profile-tab"
                          data-toggle="pill"
                          href="#pills-profile"
                          role="tab"
                          aria-controls="pills-profile"
                          aria-selected="false"
                          >Buy Product</a
                        >
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div
                        class="tab-pane fade show active"
                        id="pills-home"
                        role="tabpanel"
                        aria-labelledby="pills-home-tab"
                      >
                        <a
                          href="{{ route("dashboard-detail") }}"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/dashboard-icon-product-1.png"
                                  alt="product"
                                />
                              </div>
                              <div class="col-md-4">Shirup marzan</div>
                              <div class="col-md-3">Libran Hadi</div>
                              <div class="col-md-3">19 January, 2020</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img
                                  src="/images/dashboard-arrow-right.svg"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </a>
                        <a
                          href="{{ route("dashboard-detail") }}"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/dashboard-icon-product-2.png"
                                  alt="product"
                                />
                              </div>
                              <div class="col-md-4">Sepatu Cidogdag</div>
                              <div class="col-md-3">LibranHS</div>
                              <div class="col-md-3">20 January, 2020</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img
                                  src="/images/dashboard-arrow-right.svg"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </a>
                        <a
                          href="{{ route("dashboard-detail" , $) }}"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/dashboard-icon-product-3.png"
                                  alt="product"
                                />
                              </div>
                              <div class="col-md-4">
                                talbantal kapuk surkasur kisut
                              </div>
                              <div class="col-md-3">Libran Saputra</div>
                              <div class="col-md-3">21 January, 2020</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img
                                  src="/images/dashboard-arrow-right.svg"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="pills-profile"
                        role="tabpanel"
                        aria-labelledby="pills-profile-tab"
                      >
                        <a
                          href="{{ route("dashboard-detail") }}"
                          class="card card-list d-block"
                        >
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img
                                  src="/images/dashboard-icon-product-2.png"
                                  alt="product"
                                />
                              </div>
                              <div class="col-md-4">Sepatu Cidogdag</div>
                              <div class="col-md-3">LibranHS</div>
                              <div class="col-md-3">20 January, 2020</div>
                              <div class="col-md-1 d-none d-md-block">
                                <img
                                  src="/images/dashboard-arrow-right.svg"
                                  alt=""
                                />
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
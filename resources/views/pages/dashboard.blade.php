@extends('layouts.dashboard', ['title' => 'Dashboard'])
@section('content')
       <div class="section-content section-dashboard-home">
            <div class="container-fluid">
              <h2 class="dashboard-title">Dashboard</h2>
              <p class="dashboard-subtitle">Look what are you today</p>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">customer</div>
                        <div class="dashboard-card-subtitle">{{ $customer }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">Revenue</div>
                        <div class="dashboard-card-subtitle">{{ $revenue }}</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">transaction</div>
                        <div class="dashboard-card-subtitle">{{ $transaction_count }}</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row-mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transaction</h5>
                   @foreach ($transaction_data as $transaction)
                       
                    <a
                      href="{{ route("dashboard-detail") }}"
                      class="card card-list d-block"
                    >
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img
                              src="{{ Storage::url($transaction->product->galleries->first()->photo ?? '') }}"
                              class="w-75"
                            />
                          </div>
                          <div class="col-md-4">{{ $transaction->product->name ?? '' }}</div>
                          <div class="col-md-3">{{ $transaction->transaction->user->name ?? '' }}</div>
                          <div class="col-md-3">{{ $transaction->created_at ?? '' }}</div>
                          <div class="col-md-1 d-none d-md-block">
                            <img
                              src="/images/dashboard-arrow-right.svg"
                              alt=""
                            />
                          </div>
                        </div>
                      </div>
                    </a>
                    @endforeach
                  
                  </div>
                </div>
              </div>
            </div>
          </div>    
@endsection

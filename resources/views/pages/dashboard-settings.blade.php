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
                        <form action="{{ route('dashboard-settings-update' , 'dashboard-settings') }}" method="POST">
                          @csrf
                          <div class="row">
                            <div class="col-6">
                              <div class="form-group">
                                <label for="namaToko">Store Name</label>
                                <input
                                  type="text"
                                  name="store_name"
                                  id="namaToko"
                                  class="form-control"
                                  value="{{ old('store_name') ?? $user->store_name }}"
                                />
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label for="namaToko">Store Category</label>
                                <select
                                  name="categories_id"
                                  id=""
                                  class="form-control"
                                >
                                  <option value="" disabled>-- Pilih Category --</option>
                                  @foreach ($category as $category)
                                      
                                  <option value="{{ $category->id ?? $user->categories_id }}">{{ $category->name }}</option>
                                  @endforeach
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
                                    value= '1'
                                    {{ $user->store_status == 1 ? 'checked' : '' }}
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
                                    value='0'
                                    {{ $user->store_status == 0 || $user->store_status == null ? 'checked' : '' }}

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
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
                      <div class="card-body" id="checkout">
                        <form action="{{ route('dashboard-settings-update' , 'dashboard-settings') }}" method="POST">
                          @csrf
                          <div class="row mb-4">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="name">Your Name</label>
                                <input
                                  type="text"
                                  name="name"
                                  id="name"
                                  class="form-control"
                                  value="{{ old('name') ?? $user->name }}"
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
                                value="{{ old('email') ?? $user->email }}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Address 1</label>
                                <input
                                  type="text"
                                  name="address_one"
                                  id="addressOne"
                                  class="form-control"
                                  value="{{ old('address_one') ?? $user->address_one }}"
                                />
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="">Address 2</label>
                                <input
                                  type="text"
                                  name="addres_two"
                                  id="addressOne"
                                  class="form-control"
                                  value="{{ old('addres_two') ?? $user->addres_two }}"
                                />
                              </div>
                            </div>

                       
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="provinces_id">Provinces</label>
                                <select name="provinces_id" id="provinces_id" class="form-control" v-if="provinces" v-model = 'provinces_id'>
                                <option  v-for="province in provinces" :value="province.id ">@{{ province.name }}</option>

                                </select>
                                <select v-else="" id="" class="form-control"></select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="regencies_id">City</label>
                                <select name="regencies_id" id="regencies_id" class="form-control" v-if="regencies" v-model = 'regencies_id'>
                                <option v-for="regency in regencies" :value="regencies.id">@{{ regency.name }}</option>
                              
                                </select>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="postalCode">Postal Code</label>
                                <input
                                  type="text"
                                  name="zip_code"
                                  id="postalCode"
                                  class="form-control"
                                  value="{{ old('zip_code') ?? $user->zip_code }}"
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
                                  value="{{ old('country') ?? $user->country }}"
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
                                  value="{{ old('phone_number') ?? $user->phone_number }}"
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
@push('after-script')
       <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
       <script>
         var checkout = new Vue ({
           el : "#checkout",
           mounted(){
             AOS.init();
             this.getProvincesData();
           },
           data : {
            provinces : null,
            regencies : null,
            provinces_id : null, 
            regencies_id : null
           },
           methods : {
             getProvincesData()  {
               var self = this;
               axios.get('{{ route('api-provinces') }}') 
                .then(function(response){
                  self.provinces = response.data;
                })
               },
               getRegenciesData(){
                 var self = this;
                 axios.get('{{ url('api/regencies') }}/' + self.provinces_id )
                 .then(function(response){
                   self.regencies = response.data;
                 })
               },
           },
           watch : {
            provinces_id: function(val, oldval){
              this.regencies_id = null;
              this.getRegenciesData();
            }
           }, 
         })
       </script>
@endpush
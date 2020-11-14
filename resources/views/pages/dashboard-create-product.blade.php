@extends('layouts.dashboard', ['title'=> 'Product'])

@section('content')
     <div class="section-content section-dashboard-home">
            <div class="container-fluid">
              <h2 class="dashboard-title">Store Settings</h2>
              <p class="dashboard-subtitle">Make store that profitable</p>
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
              <div class="dashboard-content">
                <div class="row mt-3">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <form action="{{ route('dashboard-store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                          <div class="row">
                            <div class="col-6">
                              <div class="form-group">
                                <label for="nameProduct">Product Name</label>
                                <input
                                  type="text"
                                  name="name"
                                  id="name Product"
                                  class="form-control"
                              
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
                                  
                                />
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <label for="category">Category</label>
                                <select
                                  name="categories_id"
                                  id="category"
                                  class="form-control"
                                >
                                  <option value="Foods" disabled>-- Pilih Category--</option>

                                @foreach ($category as $category)
                                    
                                <option value="{{ $category->id}}">{{ $category->name }}</option>
                                @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <label for="description">Description</label>
                                <textarea
                                  name="description"
                                  id="editor"
                                  class="form-control"
                                ></textarea>
                              </div>
                            </div>
                            <div class="col-12 mt-1">
                              <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <input
                                  type="file"
                                  name="photo"
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
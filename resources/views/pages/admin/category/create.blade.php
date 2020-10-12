@extends('layouts.admin', ['title'=> 'Dashboard Admin'])

@section('content')
       <div class="section-content section-dashboard-home">
            <div class="container-fluid">
                    <div class="dashboard-heading">

                        <h2 class="dashboard-title">Tambah Category</h2>
                        <p class="dashboard-subtitle">This Add Category</p>
                     </div>

                    <div class="dashboard-content">
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{  $error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                            <form action="{{ route('store-categories') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @include('pages.admin.category.form')
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
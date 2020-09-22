@extends('layouts.admin', ['title'=> 'Dashboard Admin'])

@section('content')
       <div class="section-content section-dashboard-home">
            <div class="container-fluid">
                    <div class="dashboard-heading">

                        <h2 class="dashboard-title">Category Dashboard</h2>
                        <p class="dashboard-subtitle">This category Admin</p>
                     </div>

                    <div class="dashboard-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                        <a href="" class="btn btn-primary mb-3">+ Tambah Kategori</a>
                                            <div class="table table-responsive">
                                            <table class="table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>NAME</th>
                                                        <th>PHOTO</th>
                                                        <th>SLUG</th>
                                                        <th>AKSI</th>
                                                    </tr>

                                                </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>     
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
         </div>
        </div>

@endsection
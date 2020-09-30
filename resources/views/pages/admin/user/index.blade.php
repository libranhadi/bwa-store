@extends('layouts.admin', ['title'=> 'Dashboard Admin'])

@section('content')
       <div class="section-content section-dashboard-home">
            <div class="container-fluid">
                    <div class="dashboard-heading">

                        <h2 class="dashboard-title">User Dashboard</h2>
                        <p class="dashboard-subtitle">This User Admin</p>
                     </div>

                    <div class="dashboard-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                        <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">+ Tambah User</a>
                                            <div class="table table-responsive">
                                            <table class="table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>NAME</th>
                                                        <th>EMAIL</th>
                                                        <th>ROLES</th>
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
@push('after-script')
<script>
    var datatable = $('#crudTable').DataTable({
        processing : true,
        serverSide : true,
        ordering : true,
        ajax: {
            url: '{!! url()->current() !!}',
        },
        columns: [
            {data: 'id' , name: 'id'},
            {data: 'name' , name: 'name'},
            {data: 'email' , name: 'email'},
            {data: 'roles' , name: 'roles'},
            {
                data: 'action', 
                name:'action',
                orderable:false,
                searcable:false,
                width: '15%'   
            },
        ]
    }) 
</script>
    
@endpush

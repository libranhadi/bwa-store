@extends('layouts.admin', ['title'=> 'Dashboard Admin'])

@section('content')
       <div class="section-content section-dashboard-home">
            <div class="container-fluid">
                    <div class="dashboard-heading">

                        <h2 class="dashboard-title">Tambah User</h2>
                        <p class="dashboard-subtitle">This Edit User</p>
                     </div>

                    <div class="dashboard-content">
                            <div class="row">
                                <div class="col-md-12">
                                  @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                            <form action="{{ route('user.update' , $user->id) }}" method="POST" enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" name="name" value="{{ old("name") ?? $user->name }}">
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control">
    <small>Jika tidak ingin di ganti kosongkan saja</small>
</div>

<div class="form-group">
    <label for="roles">Roles</label>
    <select class=" form-control" name="roles" id="roles">
        <option value="ADMIN">ADMIN</option>
        <option value="USER">USER</option>
    </select>
</div>
<div class="col text-right">
    <button type="submit" class="btn btn-success mt-2"> {{ $submit ?? 'Save Now' }}</button>
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
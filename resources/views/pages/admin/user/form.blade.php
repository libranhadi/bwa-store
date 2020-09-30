<div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" name="name" value="{{ old("name")  }}">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email')}}">
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" value="{{ old('password')}}">
</div>
<div class="form-group">
    <label for="roles">Roles</label>
    <select class=" form-control"name="roles" id="roles">
        <option value="ADMIN">ADMIN</option>
        <option value="USER">USER</option>
    </select>
</div>
<div class="col text-right">
    <button type="submit" class="btn btn-success mt-2"> {{ $submit ?? 'Save Now' }}</button>
</div>
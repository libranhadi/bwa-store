<div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" name="name" value="{{ old("name") ?? $category->name }}">
</div>
<div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" name="photo" class="form-control" value="{{ old('photo')}}">
</div>
<div class="col text-right">
    <button type="submit" class="btn btn-success mt-2"> {{ $submit ?? 'Save Now' }}</button>
</div>
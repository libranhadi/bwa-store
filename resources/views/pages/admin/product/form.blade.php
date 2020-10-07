<div class="form-group">
    <label for="Name">Name</label>
    <input type="text" class="form-control" name="name" value="{{ old("name") ?? $product->name }}">
</div>
<div class="form-group">
    <label for="pemilik">Pemilik Toko</label>
    <select name="users_id" id="pemilik" class="form-control">
        <option disabled selected> --Pilih--</option>
        @foreach ($user as $user)
        <option {{ $user->id ==  $product->users_id ? 'selected' : ''}} value="{{ $user->id }}">{{ $user->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="category">Kategori</label>
    <select name="categories_id" id="category" class="form-control">
        @foreach ($category as $category)
        <option {{ $category->id == $product->categories_id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="price">Harga</label>
    <input type="number" class="form-control" name="price" value="{{ old("price") ?? $product->price }}">
</div>
<div class="form-group">
    <label for="Description">Description</label>
    <textarea name="description" id="editor" >{!! $product->description !!}</textarea>
</div>
<div class="col text-right">
    <button type="submit" class="btn btn-success mt-2"> {{ $submit ?? 'Save Now' }}</button>
</div>
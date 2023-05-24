<div class="p-2">
    <div class="form-group">
        <input name="name" type="text" id="name" value="{{ $data->name }}" class="form-control">
    </div>
    
    <div class="form-group mt-2">
        <button class="btn btn-warning" type="submit" name="name" onclick="update({{ $data->id }})">
            Edit Product
        </button>
    </div>
</div>
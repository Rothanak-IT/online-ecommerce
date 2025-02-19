<div class="item">
    <a href="{{ route('product.index') }}">Edite Product</a>

</div>
<div class="container">
    <div class="row">
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="formFile" class="form-label">Name</label>
                <input class="form-control" type="text" id="formFile" name="name" value="{{ $product-> name}}">
               
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Description</label>
                <input class="form-control" type="description" id="formFile" name="description" value="{{ $product-> description}}">
              
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Category</label>
                <input class="form-control" type="number" name="category" value="{{ $product-> category}}">
               
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Qty</label>
                <input class="form-control" type="number" name="qty" value="{{ $product-> qty}}">
               
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Price</label>
                <input class="form-control" type="number" name="price" value="{{ $product-> price}}">
               
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">User Image</label>
                <input class="form-control" type="file" id="formFile" name="image" value="{{ $product-> image}}">
                
            </div>
            <input type="submit" class="btn btn-primary btn-sm" onclick="return alert('Update Successfully')" value="update">
        </form>
        </table>
    </div>
</div>
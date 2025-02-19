<div class="container">
    <div class="row">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="formFile" class="form-label">Name</label>
                <input class="form-control" type="text" id="formFile" name="name">

            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Description</label>
                <input class="form-control" type="description" id="formFile" name="description">

            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Category</label>
                <input class="form-control" type="number" name="category">

            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Qty</label>
                <input class="form-control" type="number" name="qty">

            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Price</label>
                <input class="form-control" type="number" name="price">

            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">User Image</label>
                <input class="form-control" type="file" id="formFile" name="image">

            </div>
            <input type="submit" class="btn btn-primary btn-sm" value="btnSave">
        </form>
        <table>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

            @if ($product->count() > 0)
                @foreach ($product as $rs)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $rs->name }}</td>
                        <td>{{ $rs->description }}</td>
                        <td>{{ $rs->category }}</td>
                        <td>{{ $rs->qty }}</td>
                        <td>{{ $rs->price }}</td>
                        <td>{{ $rs->image }}</td>
                        </td>
                        <td><a href="{{ route('product.edit', $rs->id) }}" class="btn btn-success btn-sm"> Edit</a></td>
                        <td>
                            <form action="{{ route('product.destroy', $rs->id) }}" method="POST" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>No data found!</td>
                </tr>
            @endif
        </table>
    </div>
</div>
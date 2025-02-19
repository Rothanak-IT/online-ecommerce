@extends('layouts.app')
@section('body')
<h1>List Product</h1>

                <form action="" method="post" >
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
                        <input class="form-control" type="number"  name="category">
                        
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Qty</label>
                        <input class="form-control" type="number"  name="qty">
                       
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Price</label>
                        <input class="form-control" type="number"  name="price">
                       
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">User Image</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                       
                    </div>
                    <input type="submit" class="btn btn-primary btn-sm" value="Save">
                </form>
               
                
@endsection
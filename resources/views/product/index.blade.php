@extends('layouts.master')
@section('title', 'Product')
@section('content')
    <a href="{{ url('product/create') }}" class="btn btn-primary">Tambah Product</a>
    <div class="justify-content-center">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="product-table">
                @foreach ($products as $product)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            {{ $product->name }}
                        </td>
                        <td>
                            {{ $product->price }}
                        </td>
                        <td>
                            {{ $product->description }}
                        </td>
                        <td>
                            {{ $product->category->name }}
                        </td>
                        <td class="d-flex justify-content-start gap-3">
                            <a href="{{ url('product/' . $product->id . '/edit') }}" class="btn btn-warning">Edit</a>
                            <form action="product/{{ $product->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('bener mau hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

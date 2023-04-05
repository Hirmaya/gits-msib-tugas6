@extends('layouts.master')
@section('title', 'Product')
@section('content')
    <div class="d-flex row gap-4 justify-content-center">
        @foreach ($products as $product)
            <div class="col-3 mt-2 mb-1">
                <div class="card" style="min-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text my-1">Kategori: {{ $product->category->name }}</p>
                        <p class="card-text my-1">Deskripsi: {{ $product->description }}</p>
                        <p class="card-text text-muted  my-1">Harga: {{ $product->price }}</p>
                        <form action="/katalog" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="submit" value="Add to Cart" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

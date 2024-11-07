<!-- resources/views/keranjang/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cart-container {
            margin: 20px;
        }
        .cart-item {
            margin-bottom: 20px;
        }
        .cart-img {
            width: 100px;
            height: auto;
        }
        .cart-header {
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container cart-container">
    <h2 class="cart-header">Keranjang ({{ count($produk) }})</h2>
    
    <div class="row">
        @foreach($produk as $item)
            <div class="col-md-3 cart-item">
                <div class="card">
                    <img src="{{ asset('images/' . $item['gambar']) }}" class="card-img-top cart-img" alt="{{ $item['nama'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['nama'] }}</h5>
                        <p class="card-text">Size: {{ $item['size'] }}</p>
                        <p class="card-text">Rp {{ number_format($item['harga'], 0, ',', '.') }},00</p>
                        <button class="btn btn-primary">Tambah</button>
                        <button class="btn btn-danger">Kurang</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-3">
        <button class="btn btn-success">Pilih Semua</button>
        <button class="btn btn-dark">Checkout</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

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
    <h2 class="cart-header">Keranjang (<?php echo e(count($produk)); ?>)</h2>
    
    <div class="row">
        <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 cart-item">
                <div class="card">
                    <img src="<?php echo e(asset('images/' . $item['gambar'])); ?>" class="card-img-top cart-img" alt="<?php echo e($item['nama']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($item['nama']); ?></h5>
                        <p class="card-text">Size: <?php echo e($item['size']); ?></p>
                        <p class="card-text">Rp <?php echo e(number_format($item['harga'], 0, ',', '.')); ?>,00</p>
                        <button class="btn btn-primary">Tambah</button>
                        <button class="btn btn-danger">Kurang</button>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="text-center mt-3">
        <button class="btn btn-success">Pilih Semua</button>
        <button class="btn btn-dark">Checkout</button>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\coba-coba\resources\views/keranjang/index.blade.php ENDPATH**/ ?>
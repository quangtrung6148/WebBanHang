<?php include __DIR__ . '/../shares/header.php'; ?>

<div class="container mt-5">
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center" style="background-color: #007bff;">
            <h1 class="h4 mb-0">Danh Sách Sản Phẩm Điện Tử</h1>
            <a href="/webbanhang/Product/add" class="btn btn-light btn-sm text-primary">Thêm Sản Phẩm Mới</a>
        </div>
        <div class="card-body bg-white">
            <?php if (empty($products)): ?>
                <div class="alert alert-info text-center" role="alert">
                    Không có sản phẩm nào để hiển thị.
                </div>
            <?php else: ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <?php foreach ($products as $product): ?>
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm hover-effect">
                                <div class="card-img-top position-relative overflow-hidden">
                                    <?php if ($product->image): ?>
                                        <img src="/webbanhang/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>"
                                            alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>"
                                            class="img-fluid rounded-top" style="max-height: 200px; object-fit: cover; transition: transform 0.3s ease;">
                                    <?php else: ?>
                                        <div class="placeholder-image rounded-top" style="height: 200px; background-color: #f1f5f9; display: flex; align-items: center; justify-content: center;">
                                            <span class="text-muted">Không có hình ảnh</span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="text-decoration-none text-primary">
                                            <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                                        </a>
                                    </h5>
                                    <p class="card-text text-muted small">
                                        <?php echo htmlspecialchars(substr($product->description, 0, 100) . (strlen($product->description) > 100 ? '...' : ''), ENT_QUOTES, 'UTF-8'); ?>
                                    </p>
                                    <p class="card-text fw-bold">Giá:
                                        <span class="text-primary"><?php echo number_format($product->price, 0, ',', '.') . ' VND'; ?></span>
                                    </p>
                                    <p class="card-text"><strong>Danh mục:</strong>
                                        <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?>
                                    </p>
                                </div>
                                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                                    <a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" class="btn btn-outline-primary btn-sm">Sửa</a>
                                    <a href="/webbanhang/Product/delete/<?php echo $product->id; ?>" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../shares/footer.php'; ?>
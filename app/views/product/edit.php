<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Sửa sản phẩm</h5>
        </div>
        <div class="card-body">
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach ($errors as $error): ?>
                            <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" action="/webbanhang/Product/update" enctype="multipart/form-data" onsubmit="return validateForm();">
                <input type="hidden" name="id" value="<?= $product->id ?>">

                <div class="mb-3">
                    <label for="name" class="form-label">Tên sản phẩm</label>
                    <input type="text" id="name" name="name" class="form-control" value="<?= htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8') ?>" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Mô tả</label>
                    <textarea id="description" name="description" class="form-control" rows="3" required><?= htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8') ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Giá</label>
                    <input type="number" id="price" name="price" step="0.01" class="form-control" value="<?= htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8') ?>" required>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Danh mục</label>
                    <select id="category_id" name="category_id" class="form-select" required>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category->id ?>" <?= $category->id == $product->category_id ? 'selected' : '' ?>>
                                <?= htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8') ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Hình ảnh</label>
                    <input type="file" id="image" name="image" class="form-control">
                    <input type="hidden" name="existing_image" value="<?= $product->image ?>">
                    <?php if ($product->image): ?>
                        <div class="mt-3">
                            <label class="form-label d-block">Ảnh hiện tại:</label>
                            <img src="/<?= $product->image ?>" alt="Product Image" class="img-fluid rounded border" style="max-width: 200px;">
                        </div>
                    <?php endif; ?>

                </div>

                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                <a href="/webbanhang/Product/list" class="btn btn-outline-secondary ms-2">Quay lại danh sách</a>
            </form>
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
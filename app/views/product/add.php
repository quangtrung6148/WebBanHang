<?php include __DIR__ . '/../shares/header.php'; ?>

<div class="container mt-5">
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-primary text-white" style="background-color: #007bff;">
            <h1 class="h4 mb-0">Thêm Sản Phẩm Điện Tử Mới</h1>
        </div>
        <div class="card-body bg-white">
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <form method="POST" action="/webbanhang/Product/save" enctype="multipart/form-data" onsubmit="return validateForm();" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="name" class="form-label fw-bold">Tên Sản Phẩm <span class="text-danger">*</span></label>
                    <input type="text" id="name" name="name" class="form-control" required>
                    <div class="invalid-feedback">Vui lòng nhập tên sản phẩm.</div>
                </div>

                <div class="form-group">
                    <label for="description" class="form-label fw-bold">Mô Tả <span class="text-danger">*</span></label>
                    <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
                    <div class="invalid-feedback">Vui lòng nhập mô tả sản phẩm.</div>
                </div>

                <div class="form-group">
                    <label for="price" class="form-label fw-bold">Giá <span class="text-danger">*</span></label>
                    <input type="number" id="price" name="price" class="form-control" step="0.01" min="0" required>
                    <div class="invalid-feedback">Vui lòng nhập giá hợp lệ (số lớn hơn hoặc bằng 0).</div>
                </div>

                <div class="form-group">
                    <label for="category_id" class="form-label fw-bold">Danh Mục <span class="text-danger">*</span></label>
                    <select id="category_id" name="category_id" class="form-control custom-select" required>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category->id; ?>">
                                <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">Vui lòng chọn danh mục.</div>
                </div>

                <div class="form-group">
                    <label for="image" class="form-label fw-bold">Hình Ảnh</label>
                    <input type="file" id="image" name="image" class="form-control-file" accept="image/*">
                    <small class="text-muted">Định dạng hỗ trợ: JPG, PNG, JPEG. Kích thước tối đa 5MB.</small>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
                    <a href="/webbanhang/Product/list" class="btn btn-outline-secondary">Quay Lại Danh Sách</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../shares/footer.php'; ?>

<script>
    function validateForm() {
        'use strict';
        var forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function(form) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
        return true;
    }
</script>
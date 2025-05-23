<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quản lý sản phẩm</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Custom CSS -->
  <link href="/webbanhang/public/css/styles.css" rel="stylesheet" />
  <link href="/webbanhang/public/css/add.css" rel="stylesheet" />
  <link href="/webbanhang/public/css/footer.css" rel="stylesheet" />

  <style>
    body {
      background-color: #f8f9fa;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
      background-color: #ffffff;
      border-bottom: 1px solid #dee2e6;
    }

    .navbar-brand {
      color: #007bff;
      font-weight: bold;
    }

    .navbar-brand:hover {
      color: #0056b3;
    }

    .nav-link {
      color: #007bff;
    }

    .nav-link:hover {
      color: #0056b3;
      text-decoration: underline;
    }

    .container {
      padding-top: 2rem;
    }

    footer {
      background-color: #ffffff;
      border-top: 1px solid #dee2e6;
      padding: 1rem;
      text-align: center;
      margin-top: 3rem;
      color: #6c757d;
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">Quản lý sản phẩm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="/webbanhang/Product/">Danh sách sản phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/webbanhang/Product/add">Thêm sản phẩm</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 

 

  <!-- JS (Bootstrap 5 only) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

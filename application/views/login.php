<!DOCTYPE html>
<html>
<head>
<title>Login Admin</title>
<link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.4/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.4/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-5">
<div class="card shadow-lg my-5">
<div class="card-body p-5">
<h1 class="h4 text-gray-900 mb-4 text-center">Login Admin</h1>
<?php if ($this->session->flashdata('pesan')): ?>
<div class="alert alert-danger"><?= $this->session->flashdata('pesan') ?></div>
<?php endif; ?>
<form class="user" method="post" action="<?= site_url('auth/login') ?>">
<div class="form-group">
<input type="text" name="username" class="form-control form-control-user" placeholder="Username" required>
</div>
<div class="form-group">
<input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
</div>
<button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
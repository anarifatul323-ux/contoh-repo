<!DOCTYPE html>
<html>
<head>
<title>Inventarisku</title>
<link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.4/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/startbootstrap-sb-admin-2@4.1.4/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
<div id="wrapper">
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('dashboard') ?>">
<i class="fas fa-boxes"></i><div class="sidebar-brand-text mx-3">Inventarisku</div>
</a>
<hr class="sidebar-divider my-0">
<li class="nav-item"><a class="nav-link" href="<?= site_url('dashboard') ?>"><i class="fas fa-fw fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
<li class="nav-item"><a class="nav-link" href="<?= site_url('barang') ?>"><i class="fas fa-fw fa-box"></i> <span>Data Barang</span></a></li>
<li class="nav-item"><a class="nav-link" href="<?= site_url('auth/logout') ?>" onclick="return confirm('Yakin logout?')"><i class="fas fa-fw fa-sign-out-alt"></i> <span>Logout</span></a></li>
</ul>
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">
<nav class="navbar navbar-light bg-white topbar mb-4 shadow">
<span class="ml-auto text-gray-600">Halo, <?= $this->session->userdata('username') ?></span>
</nav>
<div class="container-fluid">
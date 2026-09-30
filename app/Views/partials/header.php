<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($pageTitle) ?> | POS System</title>
    <link rel="stylesheet" href="<?= base_url('css/site.css') ?>">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="<?= site_url('/') ?>">POS System</a>
            <nav class="main-nav" aria-label="Main navigation">
                <a href="<?= site_url('/') ?>"<?= $activePage === 'home' ? ' aria-current="page"' : '' ?>>Home</a>
                <a href="<?= site_url('about') ?>"<?= $activePage === 'about' ? ' aria-current="page"' : '' ?>>About</a>
                <a href="<?= site_url('customers') ?>"<?= $activePage === 'customers' ? ' aria-current="page"' : '' ?>>Customers</a>
                <a href="<?= site_url('users') ?>"<?= $activePage === 'users' ? ' aria-current="page"' : '' ?>>Users</a>
            </nav>
        </div>
    </header>
    <main class="container page-content">
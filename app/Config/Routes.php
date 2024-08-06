<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::index');

$routes->group('penjual', function ($routes) {
    $routes->get('/', 'Penjual::index');
    $routes->post('(:segment)', 'Penjual::produkKategori/$1');
    $routes->get('akun', 'Penjual::akun');
    $routes->get('alamat', 'Penjual::alamat');
    $routes->get('keranjang', 'Penjual::keranjang');
    $routes->get('penjualan', 'Penjual::penjualan');
    $routes->get('status_barang', 'Penjual::status_barang');
    $routes->get('status_pesanan', 'Penjual::status_pesanan');
    $routes->get('ubah_sandi', 'Penjual::ubah_sandi');
    $routes->get('detailBarang/(:num)', 'Penjual::detailBarang/$1');
    $routes->post('pesanBarang/(:num)', 'PenjualController::pesanBarang/$1');
});
$routes->post('setAkun', 'PenjualController::setAkun');
$routes->post('setPesanan', 'PenjualController::setPesanan');
$routes->post('setPassword', 'PenjualController::setPassword');

$routes->group('penyedia', function ($routes) {
    $routes->get('/', 'Penyedia::index');
    $routes->get('akun', 'Penyedia::akun');
    $routes->get('alamat', 'Penyedia::alamat');
    $routes->get('keuangan', 'Penyedia::keuangan');
    $routes->get('pesanan', 'Penyedia::pesanan');
    $routes->get('tambah_barang', 'Penyedia::tambah_barang');
    $routes->get('ubah_sandi', 'Penyedia::ubah_sandi');
    $routes->get('keluar', 'Penyedia::keluar');
    $routes->get('edit_barang/(:num)', 'Penyedia::edit_barang/$1');

    $routes->get('deleteBarang/(:num)', 'PenyediaController::deleteBarang/$1');
    $routes->post('tambahBarang', 'PenyediaController::tambahBarang');
    $routes->post('editBarang', 'PenyediaController::editBarang');
    $routes->post('ubahPassword', 'PenyediaController::ubahPassword');
    $routes->post('setAkun', 'PenyediaController::setAkun');
    $routes->post('setStatus/(:num)', 'PenyediaController::setStatus/$1');
});

// backend
// barang
$routes->get('barang', 'BarangController::index');
$routes->get('barang/edit/(:num)', 'BarangController::edit/$1');
$routes->post('barang/update', 'BarangController::update');
$routes->get('barang/delete/(:num)', 'BarangController::delete/$1');

//penjual
$routes->get('penjual', 'PenjualController::index');
$routes->get('penjual/delete/(:num)', 'PenjualController::delete/$1');
$routes->get('penjual/edit/(:num)', 'PenjualController::edit/$1');
$routes->post('penjual/update', 'PenjualController::update');

//pesanan
$routes->get('pesanan', 'PesananController::index');
$routes->get('pesanan/delete/(:num)', 'PesananController::delete/$1');
$routes->get('pesanan/edit/(:num)', 'PesananController::edit/$1');
$routes->post('pesanan/update', 'PesananController::update');

//detail pesanan
$routes->get('detailpesanan', 'DetailPesananController::index');
$routes->get('detailpesanan/delete/(:num)', 'DetailPesananController::delete/$1');
$routes->get('detailpesanan/edit/(:num)', 'DetailPesananController::edit/$1');
$routes->post('detailpesanan/update', 'DetailPesananController::update');

$routes->post('/login/validasi', 'login::index');

$routes->get('/admin/dashboard', 'admin::index');
$routes->get('/admin/penyedia', 'admin::penyedia');
$routes->get('/admin/admin', 'admin::admin');

$routes->post('/tambahPenjual', 'AdminController::tambahPenjual');
$routes->post('/tambahPenyedia', 'AdminController::tambahPenyedia');
$routes->post('/tambahAdmin', 'AdminController::tambahAdmin');

$routes->get('/hapusPenjual/(:num)', 'AdminController::hapusPenjual/$1');
$routes->get('/hapusPenyedia/(:num)', 'AdminController::hapusPenyedia/$1');
$routes->get('/hapusAdmin/(:num)', 'AdminController::hapusAdmin/$1');

$routes->get('/editPagePenyedia/(:num)', 'AdminController::editPage/$1/penyedia');
$routes->get('/editPageAdmin/(:num)', 'AdminController::editPage/$1/admin');
$routes->get('/editPagePenjual/(:num)', 'AdminController::editPagePenjual/$1');

$routes->post('/editAction', 'AdminController::editAction');
$routes->post('/editActionPenjual', 'AdminController::editActionPenjual');

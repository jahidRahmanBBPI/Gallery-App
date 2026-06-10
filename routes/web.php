<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\UploadImageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Image upload in public folder
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/upload/single/image', [UploadImageController::class, 'upload_image'])->name('upload.image');
Route::post('/upload+image', [UploadImageController::class, 'img_upload'])->name('img.upload');

// Multiple image upload
Route::get('/upload/multiple/image', [UploadImageController::class, 'upload_multiple_image'])->name('upload.multiple.image');
Route::post('/upload+multiple/images', [UploadImageController::class, 'img_upload_multiple'])->name('img.upload.multiple');

// Image upload in storage folder
// Single image
Route::get('/upload/single/image/storage', [StorageController::class, 'upload_image_storage'])->name('upload.image.storage');
Route::post('/upload+image/storage', [StorageController::class, 'img_upload_storage'])->name('img.upload.storage');
// Multiple image
Route::get('/upload/multiple/image/storage', [StorageController::class, 'upload_multiple_image_storage'])->name('upload.multiple.image.storage');
Route::post('/upload+multiple/images/storage', [StorageController::class, 'img_upload_multiple_storage'])->name('img.upload.multiple.storage');

// Gallery App
Route::get('/create/album', [GalleryController::class, 'create_album'])->name('create.album');
Route::post('/store/album', [GalleryController::class, 'store_album'])->name('store.album');

Route::get('/all/album', [GalleryController::class, 'all_album'])->name('all.album');
Route::get('/delete/album/{id}', [GalleryController::class, 'delete_album'])->name('delete.album');
Route::get('/edit/album/{id}', [GalleryController::class, 'edit_album'])->name('edit.album');

Route::get('/view/album/{id}', [GalleryController::class, 'view_album'])->name('view.album');

Route::get('/add/photo', [GalleryController::class, 'add_photo'])->name('add.photo');
Route::post('/store/photo', [GalleryController::class, 'store_photo'])->name('store.photo');
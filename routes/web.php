<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginUser;
use App\Http\Controllers\registerCategory;
use App\Http\Controllers\registerContainerType;
use App\Http\Controllers\registerItem;
use App\Http\Controllers\registerUser;
use App\Http\Controllers\adminUsersActions;
use App\Http\Controllers\editCategory;
use App\Http\Controllers\editContainersTypes;
use App\Http\Controllers\editItem;
use App\Http\Controllers\registerStock;
use App\Http\Controllers\tablesOperations;

//Authentication Routes
Route::get('/register', [registerUser::class, 'index'])->name('register');
Route::post('/register_create_user', [registerUser::class, 'store'])->name('register_create_user');

Route::get('/login', [loginUser::class, 'index'])->name('login');
Route::post('/auth', [loginUser::class, 'auth'])->name('auth');

Route::get('/logout', [loginUser::class, 'logout'])->name('logout');


//Dashboard Routes
Route::middleware(['checksession', 'check.user.account.type'])->group(function () {
    Route::get('/', [registerStock::class, 'index'])->name('home');
    Route::get('/estoque', [registerStock::class, 'index'])->name('stock');
    Route::get('/itens', [registerItem::class, 'index'])->name('items');
    Route::get('/categorias', [registerCategory::class, 'index'])->name('categories');
    Route::get('/recipientes', [registerContainerType::class, 'index'])->name('containers');

    /*Route::get('/estimativas', function () {
        return view('reagents_estimated');
    })->name('reagents_estimated');*/
});


//Admin Routes
Route::middleware(['checksession', 'check.user.account.type', 'check.user.admin'])->group(function () {

    //Registering
    Route::post('/estoque/register_stock', [registerStock::class, 'store'])->name('register_stock');
    Route::post('/items/register_item', [registerItem::class, 'store'])->name('register_item');
    Route::post('/items/register_category', [registerCategory::class, 'store'])->name('register_category');
    Route::post('/items/register_container_type', [registerContainerType::class, 'store'])->name('register_container_type');

    //Control users Operations
    Route::get('/lista_de_usuarios', [adminUsersActions::class, 'index'])->name('users_list');
    Route::post('/admin/makeAdmin/{id}', [adminUsersActions::class, 'makeAdmin'])->name('makeAdmin');

    Route::get('/aprovar_usuarios', [adminUsersActions::class, 'showUnapprovedUsers'])->name('approve_users');
    Route::post('/admin/accept/{id}', [adminUsersActions::class, 'makeCollaborator'])->name('acceptUser');
    Route::post('/admin/decline/{id}', [adminUsersActions::class, 'declineCollaborator'])->name('declineUser');

    //Tables Operations
    Route::post('/admin/delete/container_type/{id}', [tablesOperations::class, 'deleteContainerType'])->name('deleteContainerType');
    Route::post('/admin/delete/category/{id}', [tablesOperations::class, 'deleteCategory'])->name('deleteCategory');
    Route::post('/admin/delete/item/{id}', [tablesOperations::class, 'deleteItem'])->name('deleteCategory');

    Route::post('/admin/edit/container_type/save/{id}', [editContainersTypes::class, 'edit'])->name('editContainerTypeSave');
    Route::post('/admin/edit/category/save/{id}', [editCategory::class, 'edit'])->name('editCategorySave');
    Route::post('/admin/edit/item/save/{id}', [editItem::class, 'edit'])->name('editItem');

    Route::get('/admin/edit/container_type/{id}', [editContainersTypes::class, 'index'])->name('editContainerType');
    Route::get('/admin/edit/category/{id}', [editCategory::class, 'index'])->name('editCategory');
    Route::get('/admin/edit/item/{id}', [editItem::class, 'index'])->name('editItem');

});

<?php

use Illuminate\Support\Facades\Route;

/*------------------Back-------------------*/
use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\aboutController;
use App\Http\Controllers\Back\doctorController;
use App\Http\Controllers\Back\settingsController;
use App\Http\Controllers\Back\adminController;
use App\Http\Controllers\Back\contactController;
/*------------------Front-------------------*/
use App\Http\Controllers\front\homepage;


/*
|--------------------------------------------------------------------------
| BACK ROUTES
|--------------------------------------------------------------------------
*/
Route::prefix('yonetici')->name('admin.')->middleware('isLogin')->group(function(){
Route::get('giris',[AuthController::class,'login'])->middleware('isLogin')->name('login');
Route::post('giris',[AuthController::class,'loginPost'])->middleware('isLogin')->name('login.post');
});

Route::prefix('yonetici')->name('admin.')->middleware('isAdmin')->group(function(){

/*
|--------------------------------------------------------------------------
| Oluşturduğum isAdmin ve isLogin adlı iki middleware ile admin panel 
| güvenliğini sağladım. Bu sayede admin panelindeki bütün işlemler sadece
| oturumu açık admin tarafından yapılabilir. Ve oturum açmış bir kullanıcı 
| tekrardan giriş sayfasına yönlenmez. 
|--------------------------------------------------------------------------
*/

Route::get('panel',[Dashboard::class,'index'])->name('dashboard');

Route::get('hakkimizda',[aboutController::class,'about'])->name('about');
Route::post('hakkimizda',[aboutController::class,'edit'])->name('about.edit');

Route::get('hekimler',[doctorController::class,'index'])->name('doctors.index');
Route::get('hekimler/olustur',[doctorController::class,'create'])->name('doctors.create');
Route::post('hekimler/olustur',[doctorController::class,'createdoctor'])->name('doctors.create.post');
Route::get('hekimler/guncelle/{id}',[doctorController::class,'edit'])->name('doctors.edit');
Route::post('hekimler/guncelle/{id}',[doctorController::class,'update'])->name('doctors.edit.post');
Route::get('hekimler/sil/{id}',[doctorController::class,'destroy'])->name('doctors.destroy');


Route::get('ayarlar',[settingsController::class,'index'])->name('settings.index');
Route::post('ayarlar/guncelle',[settingsController::class,'update'])->name('settings.update');

Route::get('profil',[adminController::class,'index'])->name('settings.profile');
Route::post('profil/guncelle', [adminController::class,'update'])->name('profile.update');

Route::get('iletisim',[ContactController::class,'index'])->name('contact.index');
Route::get('iletisim/oku/{id}',[ContactController::class,'read'])->name('contact.read');
Route::get('mesajlar/sil/{id}',[ContactController::class,'delete'])->name('contact.delete');


Route::get('cikis',[AuthController::class,'logout'])->name('logout');
});



/*
|--------------------------------------------------------------------------
|   FRONT ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/', [homepage::class, 'index'])->name('homepage');
Route::get('/hakkimizda', [homepage::class, 'about'])->name('about');
Route::get('/iletisim',[homepage::class, 'contact'])->name('contact');
Route::post('/iletisim',[homepage::class,'contactpost'])->name('contact.post');
Route::get('aktif-degil', function () {
return view('front.offline');
});
<?php
// ====================================================================================================================
// utility ============================================================================================================
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

// ====================================================================================================================
// Admin ==============================================================================================================
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\DashboardController;

// Artikel ============================================================================================================
use App\Http\Controllers\Admin\Artikel\ArtikelController;
use App\Http\Controllers\Admin\Artikel\KategoriController;
use App\Http\Controllers\Admin\Artikel\TagController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CalonController;
use App\Http\Controllers\Admin\CalonNilaiController;
use App\Http\Controllers\Admin\ClientController;

// Contact ============================================================================================================
use App\Http\Controllers\Admin\Contact\FAQController;
use App\Http\Controllers\Admin\Contact\ListContactController;
use App\Http\Controllers\Admin\Contact\MessageController;

// User Access ========================================================================================================
use App\Http\Controllers\Admin\UserAccess\PermissionController;
use App\Http\Controllers\Admin\UserAccess\RoleController;

// Menu ===============================================================================================================
use App\Http\Controllers\Admin\Menu\AdminController as MenuAdminController;
use App\Http\Controllers\Admin\Menu\FrontendController as MenuFrontendController;

// Pendaftaran ========================================================================================================
use App\Http\Controllers\Admin\Pendaftaran\GFormController;
use App\Http\Controllers\Admin\PendaftaranController;

// Setting ============================================================================================================
use App\Http\Controllers\Admin\Setting\AdminController;
use App\Http\Controllers\Admin\Setting\FrontController;
use App\Http\Controllers\Admin\Setting\HomeController;
use App\Http\Controllers\Admin\Setting\HomeSliderController;
use App\Http\Controllers\Admin\Setting\VisiMisiController;
use App\Http\Controllers\Admin\Setting\AboutController;

// Utility ============================================================================================================
use App\Http\Controllers\Admin\Utility\HariBesarNasionalController;
use App\Http\Controllers\Admin\Utility\NotifAdminAtasController;
use App\Http\Controllers\Admin\Utility\NotifDepanAtasController;

// Produk ============================================================================================================
use App\Http\Controllers\Admin\Produk\KategoriController as ProdukKategoriController;
use App\Http\Controllers\Admin\Produk\ProdukController;

// Home ===============================================================================================================
use App\Http\Controllers\Admin\Home\KataKataController;
use App\Http\Controllers\Admin\Home\PengurusController;
use App\Http\Controllers\Admin\Home\ProgramPembelajaranController;
use App\Http\Controllers\Admin\Home\TestimonialController;
use App\Http\Controllers\Admin\KecamatanController;
use App\Http\Controllers\Admin\TahapanController;
use App\Http\Controllers\Admin\Produk\MarketplaceController;
use App\Http\Controllers\Admin\VistorController;

// Portfolio ==========================================================================================================
use App\Http\Controllers\Admin\Portfolio\KategoriController as PortfolioKategoriController;
use App\Http\Controllers\Admin\Portfolio\PortfolioController;
use App\Http\Controllers\Admin\Portfolio\SubKategoriController as PortfolioSubKategoriController;

// Portfolio ==========================================================================================================
use App\Http\Controllers\Admin\SPK\SAW\SAWController as SPK_SAW_Controller;
use App\Http\Controllers\Admin\SPK\SAW\KriteriaController as SPK_SAW_KriteriaController;
use App\Http\Controllers\Admin\SPK\SAW\AlternatifController as SPK_SAW_AlternatifController;
use App\Http\Controllers\Admin\SPK\WP\WPController as SPK_WP_Controller;
use App\Http\Controllers\Admin\SPK\WP\KriteriaController as SPK_WP_KriteriaController;
use App\Http\Controllers\Admin\SPK\WP\AlternatifController as SPK_WP_AlternatifController;

// Portfolio ==========================================================================================================
use App\Http\Controllers\Admin\Import\KecamatanController as ImportKecamatanController;
use App\Http\Controllers\Admin\Import\CalonController as ImportCalonController;
use App\Http\Controllers\Admin\Import\KriteriaController as ImportKriteriaController;
use App\Http\Controllers\Admin\Import\PendudukController as ImportPendudukController;
use App\Http\Controllers\Admin\KriteriaController;
use App\Http\Controllers\Admin\PendudukController;
use App\Http\Controllers\Admin\Setting\DashboardController as SettingDashboardController;

// ====================================================================================================================



$name = 'admin';
$prefix = 'dashboard';
Route::group(
    [
        'prefix' => $prefix,
        'middleware' => "permission:$name.$prefix",
        'controller' => DashboardController::class
    ],
    function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.dashboard
        Route::get('/', 'index')->name($name);
        Route::get('/vistor_counter', 'vistor_counter')->name("$name.vistor_counter");
    }
);

Route::get('/', fn () => Redirect::route('admin.dashboard'));

$prefix = 'user';
Route::controller(UserController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.user
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/excel', 'excel')->name("$name.excel")->middleware("permission:$name.excel");

    Route::post('/', 'store')->name("$name.store")->middleware("permission:$name.insert");
    Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");

    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
});

$prefix = 'user_access';
Route::group(['prefix' => $prefix], function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.user_access

    $prefix = 'permission';
    Route::controller(PermissionController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.user_access.permission
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/', 'store')->name("$name.store")->middleware("permission:$name.insert");
        Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });

    $prefix = 'role';
    Route::controller(RoleController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.user_access.role
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/create', 'create')->name("$name.create")->middleware("permission:$name.insert");
        Route::get('/edit/{model}', 'edit')->name("$name.edit")->middleware("permission:$name.update");
        Route::post('/', 'store')->name("$name.store")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{id}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});

$prefix = 'menu';
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.menu

    $prefix = 'admin';
    Route::controller(MenuAdminController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.menu.admin
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::put('/save', 'save')->name("$name.save")->middleware("permission:$name.save");

        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");

        Route::get('/list', 'list')->name("$name.list")->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/parent_list', 'parent_list')->name("$name.parent_list")->middleware("permission:$name");
    });
});

$prefix = "setting";
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.setting

    $prefix = 'admin';
    $name_ = "$name.$prefix"; // admin.setting.admin
    Route::group([
        'controller' => AdminController::class,
        'prefix' => $prefix,
        'middleware' => "permission:$name_"
    ], function () use ($name_) {
        Route::get('/', 'index')->name($name_);
        Route::post('/save/app', 'save_app')->name("$name_.save.app");
        Route::post('/save/meta', 'save_meta')->name("$name_.save.meta");

        Route::get('/meta', 'meta_list')->name("$name_.meta");
        Route::post('/meta/insert', 'meta_insert')->name("$name_.meta.insert");
        Route::post('/meta/update', 'meta_update')->name("$name_.meta.update");
        Route::delete('/meta/delete', 'meta_delete')->name("$name_.meta.delete");
    });

    $prefix = 'dashboard';
    Route::controller(SettingDashboardController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.setting.dashboard
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    });
});


$prefix = "profile";
Route::controller(UserController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.profile
    Route::get('/', 'profile')->name($name)->middleware("permission:$name");
    Route::post('/save', 'save_profile')->name("$name.save")->middleware("permission:$name.save");
    Route::post('/save/password', 'save_password')->name("$name.password.save")->middleware("permission:$name.password.save");
});

$prefix = "password";
Route::controller(UserController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.password
    Route::get('/', 'change_password')->name($name)->middleware("permission:$name");
    Route::post('/save', 'save_password')->name("$name.save")->middleware("permission:$name.save");
});


$prefix = 'kriteria';
Route::controller(KriteriaController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.kriteria
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
    Route::get('/export', 'export')->name("$name.export")->middleware("permission:$name");
    Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
});

$prefix = 'penduduk';
Route::controller(PendudukController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.calon.penduduk
    Route::get('/', 'index')->name($name)->middleware("permission:$name");
    Route::get('/datatable', 'datatable')->name($name)->middleware("permission:$name");
    Route::get('/export', 'export')->name("$name.export")->middleware("permission:$name");
    Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
    Route::get('/datatable', 'datatable')->name("$name.datatable")->middleware("permission:$name");
    Route::get('/kriteria', 'kriteria')->name("$name.kriteria")->middleware("permission:$name");
    Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
    Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");

    // set status
    Route::post('/set_status', 'set_status')->name("$name.set_status")->middleware("permission:$name.set_status");

    Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
});

$prefix = 'import';
Route::prefix($prefix)->group(function () use ($name, $prefix) {
    $name = "$name.$prefix"; // admin.import

    $prefix = 'kriteria';
    Route::controller(ImportKriteriaController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.import.kriteria
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/format', 'format')->name("$name.format")->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });

    $prefix = 'penduduk';
    Route::controller(ImportPendudukController::class)->prefix($prefix)->group(function () use ($name, $prefix) {
        $name = "$name.$prefix"; // admin.import.penduduk
        Route::get('/', 'index')->name($name)->middleware("permission:$name");
        Route::get('/find', 'find')->name("$name.find")->middleware("permission:$name.update");
        Route::get('/format', 'format')->name("$name.format")->middleware("permission:$name");
        Route::post('/', 'insert')->name("$name.insert")->middleware("permission:$name.insert");
        Route::post('/update', 'update')->name("$name.update")->middleware("permission:$name.update");
        Route::delete('/{model}', 'delete')->name("$name.delete")->middleware("permission:$name.delete");
    });
});

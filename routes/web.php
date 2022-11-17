<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FaqController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KontakController;


use App\Http\Controllers\VendorController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\Akun\RoleController;

// use App\Http\Controllers\Vendor\VendorController;

use App\Http\Controllers\Akun\LoginController;
use App\Http\Controllers\Master\AppController;
use App\Http\Controllers\SliderHomeController;
use App\Http\Controllers\TentangHomeController;
use App\Http\Controllers\SliderKontakController;
use App\Http\Controllers\Akun\PenggunaController;
use App\Http\Controllers\SliderTentangController;
use App\Http\Controllers\Layanan\DetailController;

use App\Http\Controllers\Admin\DataOrderController;
use App\Http\Controllers\Layanan\LayananController;
use App\Http\Controllers\Master\HomeAwalController;
use App\Http\Controllers\Master\KategoriController;
use App\Http\Controllers\Master\ProvinsiController;
use App\Http\Controllers\KebijakanPrivasiController;
use App\Http\Controllers\Master\DataAdminController;
use App\Http\Controllers\Admin\DataPaymentController;

use App\Http\Controllers\Akun\DatapenggunaController;


use App\Http\Controllers\Master\DataVendorController;
use App\Http\Controllers\Admin\DataCustomerController;

use App\Http\Controllers\Layanan\SubLayananController;
use App\Http\Controllers\Master\DataFinanceController;
use App\Http\Controllers\User\UserPemesananController;
use App\Http\Controllers\SubTentangtitipsiniController;
use App\Http\Controllers\User\ProfilCustomerController;
use App\Http\Controllers\User\UserLandingpageController;
use App\Http\Controllers\Admin\PemesananPickupController;
use App\Http\Controllers\Layanan\LayananSliderController;
use App\Http\Controllers\Master\DataDiriVendorController;
use App\Http\Controllers\UserKonfirmPembayaranController;
use App\Http\Controllers\Admin\VerifikasiVendorController;
use App\Http\Controllers\Admin\DataLayananVendorController;
use App\Http\Controllers\Admin\VerifikasiPenggunaController;
use App\Http\Controllers\Master\DataCustomersuperController;
use App\Http\Controllers\Master\UpdatephotoAdminnController;
use App\Http\Controllers\Master\UpdatephotoVendorController;
use App\Http\Controllers\User\UpdatephotoCustomerController;
use App\Http\Controllers\Master\UpdatephotoFinanceController;
use App\Http\Controllers\Admin\VerifikasiDataVendorController;
use App\Http\Controllers\Master\TambahAlamatCustomerController;
use App\Http\Controllers\Admin\PengembalianUangVendorController;
use App\Http\Controllers\Master\UpdatephotoSuperadminController;
use App\Http\Controllers\Admin\VerifikasiLayananVendorController;
use App\Http\Controllers\Master\HomeAwalController as MasterHomeAwalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app');
});

// Tampilan Admin
Route::controller(AdminController::class)->group(function(){
    Route::prefix("admin")->group(function(){
        Route::get("/dashboard_admin", "dashboard_ad");
        Route::resource("profile", ProfileAdminController::class);
        Route::patch('/profile/{id}', [ProfileAdminController::class, "update"]);
    });
    Route::prefix("data")->group(function(){
        Route::resource("data_customer", DataCustomerController::class);
        Route::resource("data_payment", DataPaymentController::class);
        Route::controller(DataOrderController::class)->group(function(){
            Route::prefix("data_order")->group(function(){
                Route::get("/kendaraan", "kendaraan");
                Route::get("/bangunan", "bangunan");
                Route::get("/barang", "barang");
                Route::get("/pickup", "pickup");
            });
        });
    });

    Route::controller(AdminController::class)->group(function(){
        Route::get("/admin/pengguna/user/customer", "data_customer");
        Route::get("/admin/pengguna/user/vendor", "data_vendor");
        Route::get("/admin/transaksi/transaksi", "transaksi");
        // Route::get("/admin/pengguna/verifikasi_vendor", "vendor");

    });

    Route::prefix("vendor")->group(function(){
        Route::resource("verifikasi_layanan", VerifikasiLayananVendorController::class);
        Route::resource("data_vendor", VerifikasiDataVendorController::class);
        Route::resource("pemesanan_pickup", PemesananPickupController::class);
        Route::controller(DataLayananVendorController::class)->group(function(){
            Route::prefix("data_vendor")->group(function(){
                Route::get("/kendaraan", "kendaraan");
                Route::get("/bangunan", "bangunan");
                Route::get("/barang", "barang");
                Route::get("/pickup", "pickup");
            });
        });
        Route::controller(PengembalianUangVendorController::class)->group(function(){
            Route::prefix("transaksi_pengambilan_uang")->group(function(){
                Route::get("/berlangsung", "berlangsung");
                Route::get("/selesai", "selesai");
            });
        });
    });
});

Route::controller(VerifikasiVendorController::class)->group(function(){
    Route::get('/admin/verifikasi/vendor', 'index');
    Route::put('/admin/verifikasi/vendor/{id}/aktifkan', 'aktifkan');
});

Route::controller(VerifikasiPenggunaController::class)->group(function(){
    Route::get('/admin/verifikasi/pengguna', 'index');
    Route::put('/admin/verifikasi/pengguna/{id}/aktifkan', 'aktifkan');
});


// Tampilan User
    Route::controller(UserLandingpageController::class)->group(function() {
        Route::prefix("user")->group(function() {
            Route::get("/home", "home");
            Route::get("/kontak", "kontak");
            Route::get("/tentang", "tentang");
            Route::prefix("layanan")->group(function() {
                Route::get("/", "layanan");
                Route::get("/barang", "barang");
                Route::get("/bangunan", "bangunan");
                Route::get("/kendaraan", "kendaraan");
                Route::prefix("detail_layanan")->group(function() {
                    Route::get("/kendaraan", "d_kendaraan");
                    Route::get("/bangunan", "d_bangunan");
                    Route::get("/barang", "d_barang");
                });
            });
            Route::prefix("pemesanan")->group(function() {
                Route::resource("pemesanan", UserPemesananController::class);
                Route::get("/info_pembayaran", "i_pembayaran");
                Route::resource("konfirm_pembayaran", UserKonfirmPembayaranController::class);
                Route::get("/struk", "struk");
                Route::prefix("history")->group(function() {
                    Route::get("/on_progress", "o_progress");
                    Route::get("/last_progress", "l_progress");
                });
            });
            Route::prefix("profil")->group(function() {
                Route::resource("profil", ProfilCustomerController::class);
                // Route::get("/profil/edit", ProfilCustomerController::class);f
                // Route::get("/profil/simpan", ProfilCustomerController::class);
                Route::get("alamat", [TambahAlamatCustomerController::class, "alamat"]);
                Route::resource("/tambah_alamat", TambahAlamatCustomerController::class);
            });
        });
        //User profil
        Route::get("/user/profil/kebijakanprivasi", [UserLandingpageController::class, 'kebijakan']);
        Route::get("/user/profil/tentang/tentang", [UserLandingpageController::class, 'tentangtitipsini']);
        Route::get("/user/profil/bantuan/bantuan", [UserLandingpageController::class, 'bantuan']);
        Route::get("/user/profil/bantuan/Jawaban1", [UserLandingpageController::class, 'jwb1']);
        Route::get("/user/profil/bantuan/Jawaban2", [UserLandingpageController::class, 'jwb2']);
        Route::get("/user/profil/bantuan/Jawaban3", [UserLandingpageController::class, 'jwb3']);
        Route::get("/user/profil/bantuan/Jawaban4", [UserLandingpageController::class, 'jwb4']);
        Route::get("/user/profil/bantuan/Jawaban5", [UserLandingpageController::class, 'jwb5']);
        //user pemesanan
        Route::get('/user/pemesanan/info_pembayaran', [UserLandingpageController::class, 'i_pembayaran']);
        Route::get("/user/pemesanan/struk", [UserLandingpageController::class, 'struk']);
        Route::get('/user/pemesanan/baru', [UserLandingpageController::class, 'baru']);
        Route::get('/user/pemesanan/history/on_progress', [UserLandingpageController::class, 'o_progress']);
        Route::get('/user/pemesanan/history/last_progress', [UserLandingpageController::class, 'l_progress']);
        Route::get('/user/pemesanan/pemesananB', [UserLandingpageController::class, 'pmsnB']);
        Route::get('/user/pemesanan/pemesananBarang', [UserLandingpageController::class, 'pmsnBarang']);
        Route::get('/user/pemesanan/pembayaran', [UserLandingpageController::class, 'pembayaran']);
        //User Sub
        Route::get('/user/sub/bangunan', [UserLandingpageController::class, 'subbangunan']);
        Route::get('/user/sub/barang', [UserLandingpageController::class, 'subbarang']);
        Route::get('/user/sub/baru', [UserLandingpageController::class, 'subbaru']);
        //Kategori
        Route::get('/user/kategori/detail', [UserLandingpageController::class, 'katdetail']);
        Route::get('/user/kategori/barang', [UserLandingpageController::class, 'katbarang']);
        Route::get('/user/kategori/bangunan', [UserLandingpageController::class, 'katbangunan']);
    });

    Route::controller(VerifikasiLayananVendorController::class)->group(function(){
        Route::get('/superadmin/verifikasi/verifikasi_layanan', 'verifikasi_layanan');
    });

    Route::get("/user/profil/edit_alamat", function() {
        return view("user.profil.edit_alamat");
    });

    Route::controller(UpdatephotoCustomerController::class)->group(function(){
        Route::get('/user/profil/profil','indexp')->name('porfil.profil.indexp');
        Route::patch('/profil/profil/{id}','update')->name('profil.profil.update');
    });

// Tampilan Vendor
Route::controller(VendorController::class)->group(function(){
    Route::prefix("vendor")->group(function(){
        Route::get("/dashboard_vendor", "dashboard_ven");
    });
});

// Tampilan Finance
Route::controller(FinanceController::class)->group(function(){
    Route::prefix("finance")->group(function(){
        Route::get("/dashboard_finance", "dashboard_fin");
    });
});

Route::controller(FinanceController::class)->group(function(){
    Route::get('/finance/page', 'index');
    Route::get('/finance/transaksi/transaksiuser', 'transaksiuser');
    Route::get('/finance/transaksi/transaksivendor', 'transaksivendor');
    Route::get('/finance/transaksi/detailtransaksiuser', 'detailtransaksiuser');
    Route::get('/finance/transaksi/detailtransaksivendor', 'detailtransaksivendor');
    Route::get('/finance/DataPenarikan/penarikan', 'penarikan');
    Route::get('/finance/DataPenarikan/konfirmasi', 'konfirmasi');
    Route::get('/finance/DataPenarikan/history', 'history');
    Route::get('/finance/DataPenarikan/vendor', 'vendor');
    Route::get('/finance/profilefinance', 'profile');
    Route::get('/finance/laporan/laporan', 'laporan');
    Route::get('/finance/laporan/laporansistem', 'laporansistem');
    Route::get('/finance/laporan/laporanfinance', 'laporanfinance');

});



// Tampilan Admin
Route::controller(AdminController::class)->group(function(){
    Route::prefix("admin")->group(function(){
        Route::get("/dashboard_admin", "dashboard_ad");
    });
});

Route::group(["middleware" => ["guest"]], function() {
    Route::get("/login", [LoginController::class, "login"]);
    Route::post("/login", [LoginController::class, "post_login"]);
    Route::get("/register", [LoginController::class, "buat_akun"]);
    Route::post("/register", [LoginController::class, "post_register"]);
    Route::post("/post_register", [LoginController::class, "post_register"]);;

});

Route::get("/ambil_kecamatan", [LoginController::class, "kecamatan"]);
    Route::get("/ambil_kelurahan", [LoginController::class, "kelurahan"]);

Route::group(["middleware" => ["autentikasi"]], function() {
    Route::controller(AppController::class)->group(function() {
        Route::prefix("superadmin")->group(function() {
            Route::get("/dashboard", "dashboard");
            Route::get("/profile", "profile");
            Route::get("/home", "home");
            Route::get("/setting", "setting");

            Route::prefix("data")->group(function() {
                Route::get("/data_payment", "data_payment");
                Route::prefix("data_order")->group(function() {
                    Route::get("/kendaraan", "order_kendaraan");
                    Route::get("/barang", "order_barang");
                    Route::get("/bangunan", "order_bangunan");
                    Route::get("/pickup", "order_pickup");
                });
            });
            Route::prefix("penarikan")->group(function() {
                Route::get("/penarikan", "penarikan");
                Route::get("/history", "history");
                Route::get("/vendor", "penarikan_vendor");
            });

            Route::prefix("akun")->group(function() {
                // Route::get("/role/index", [PenggunaController::class, "indexrole"]);
                Route::get("/role/edit", [RoleController::class, "edit"]);
                Route::get("/role/simpan", [RoleController::class, "update"]);
                Route::resource("role", RoleController::class);
                Route::get('/pengguna/edit', [PenggunaController::class, "edit"]);
                Route::get('/pengguna/simpan', [PenggunaController::class, "update"]);
                Route::resource("pengguna", PenggunaController::class);

            });
            // Route::get("/superadmin/akun/pengguna/users/pdf_vendor", function() {
            //     return view("superadmin.akun.pengguna.users.pdf_vendor");
            // });

            Route::prefix("master")->group(function() {
                Route::get("/provinsi/edit", [ProvinsiController::class, "edit"]);
                Route::get("/provinsi/simpan", [ProvinsiController::class, "update"]);
                Route::resource("provinsi", ProvinsiController::class);

                Route::get("/homeawal/edit", [HomeAwalController::class, "edit"]);
                Route::put("/homeawal/simpan", [HomeAwalController::class, "update"]);
                Route::resource("homeawal", HomeAwalController::class);

                Route::get("/tentangtitipsini/edit", [SubTentangtitipsiniController::class, "edit"]);
                Route::put("/tentangtitipsini/simpan", [SubTentangtitipsiniController::class, "update"]);
                Route::resource("tentangtitipsini", SubTentangtitipsiniController::class);

                Route::get('/tentanghome/edit', [TentangHomeController::class, "edit"]);
                Route::get('/tentanghome/simpan', [TentangHomeController::class, "update"]);
                Route::resource('tentanghome', TentangHomeController::class);

                Route::get('/sliderhome/edit', [SliderHomeController::class, "edit"]);
                Route::put('/sliderhome/simpan', [SliderHomeController::class, "update"]);
                Route::resource("sliderhome", SliderHomeController::class);

                Route::get('/kontak/edit', [KontakController::class, "edit"]);
                Route::put('/kontak/simpan', [KontakController::class, "update"]);
                Route::resource('kontak', KontakController::class);

                Route::get('/sliderkontak/edit', [SliderKontakController::class, "edit"]);
                Route::put('/sliderkontak/simpan', [SliderKontakController::class, "update"]);
                Route::resource('sliderkontak', SliderKontakController::class);

                Route::get('/slidertentang/edit', [SliderTentangController::class, "edit"]);
                Route::put('/slidertentang/simpan', [SliderTentangController::class, "update"]);
                Route::resource('slidertentang', SliderTentangController::class);
            });

            Route::prefix("slider")->group(function() {
                // Route::get("/layanan_slider/edit", [LayananSliderController::class, "edit"]);
                // Route::put("/layanan_slider/simpan", [LayananSliderController::class, "update"]);
                // Route::resource("layanan_slider", LayananSliderController::class);

            });

            Route::prefix("layanan")->group(function() {
                Route::get("/kategori/edit", [KategoriController::class, "edit"]);
                Route::put("/kategori/simpan", [KategoriController::class, "update"]);
                Route::resource("kategori", KategoriController::class);

                Route::get("/sublayanan/edit", [SubLayananController::class, "edit"]);
                Route::get("/sublayanan/simpan", [SubLayananController::class, "update"]);
                Route::resource("sublayanan", SubLayananController::class);

                Route::get("/detlayanan/edit", [DetailController::class, "edit"]);
                Route::get("/detlayanan/simpan", [DetailController::class, "update"]);
                Route::resource("detlayanan", DetailController::class);

                Route::get("/layanan/edit", [LayananController::class, "edit"]);
                Route::get("/layanan/simpan", [LayananController::class, "update"]);
                Route::resource("layanan", LayananController::class);

                Route::get("/layanan_slider/edit", [LayananSliderController::class, "edit"]);
                Route::put("/layanan_slider/simpan", [LayananSliderController::class, "update"]);
                Route::resource("layanan_slider", LayananSliderController::class);
            });
        });
    });
    Route::get("/logout", [LoginController::class, "logout"]);

});

Route::controller(AppController::class)->group(function(){
    Route::get('/superadmin/transaksi/transaksi', 'transaksi');
});

//UPDATE PHOTO ADMIN
Route::controller(UpdatephotoAdminnController::class)->group(function(){
    Route::get('/admin/admin/photoprofile','indexp')->name('admin.photoprofile.indexp');
    Route::patch('/admin/photoprofile/{id}','update')->name('photoprofile.update');
});

//UPDATE PHOTO SUPERADMIN
Route::controller(UpdatephotoSuperadminController::class)->group(function(){
    Route::get('/superadmin/profile/profile','indexp')->name('profile.profile.indexp');
    Route::patch('/profile/profile/{id}','update')->name('profile.update');
});

//UPDATE PHOTO FINANCE
Route::controller(UpdatephotoFinanceController::class)->group(function(){
    Route::get('/finance/profilefinance','indexp')->name('profilefinance.indexp');
    Route::patch('/profilefinance/{id}','update')->name('profilefinance.update');
});

//UPDATE PHOTO VENDOR
Route::controller(UpdatephotoVendorController::class)->group(function(){
    Route::get('/vendor/profilevendor/profile_vendor','indexp')->name('vendor.profilevendor.profile_vendor');
    Route::patch('/profilevendor/profile_vendor/{id}','update')->name('profile_vendor.update');
});

//UPDATE PHOTO CUSTOMER
Route::controller(UpdatephotoCustomerController::class)->group(function(){
    Route::get('/user/profil/profil','indexp')->name('user.profil.profil');
    Route::patch('/profil/profil/{id}','update')->name('profil.update');
});
//route pengguna
route::controller(DatapenggunaController::class)->group(function(){
    // Route::get('/superadmin/akun/pengguna/users/admin', 'admin');
    // Route::get('/superadmin/akun/pengguna/users/vendor', 'vendor');
    Route::get('/superadmin/akun/pengguna/users/finance', 'finance');
    // Route::get('/superadmin/akun/pengguna/users/customer', 'customer');
    Route::get('/superadmin/verifikasi/data_vendor', 'verifikasi_vendor');
    Route::get('/superadmin/akun/pengguna/users/print_pdf', 'pdf');

});

//Data Pengguna Dashboard Superadmin
Route::get("/superadmin/akun/pengguna/users/customer",[DataCustomersuperController::class, 'index']);
Route::get("/superadmin/akun/pengguna/users/print_pdf_customer",[DataCustomersuperController::class, 'pdf']);

Route::get("/superadmin/akun/pengguna/users/finance",[DataFinanceController::class, 'index']);
Route::get("/superadmin/akun/pengguna/users/print_pdf_finance",[DataFinanceController::class, 'pdf']);

Route::get("/superadmin/akun/pengguna/users/admin",[DataAdminController::class, 'index']);
Route::get("/superadmin/akun/pengguna/users/print_pdf_admin",[DataAdminController::class, 'pdf']);

Route::get("/superadmin/akun/pengguna/users/vendor",[DataVendorController::class, 'index']);
Route::get("/superadmin/akun/pengguna/users/print_pdf",[DataVendorController::class, 'pdf']);
Route::get("/superadmin/akun/pengguna/users/pdf_vendor/{id}",[DataVendorController::class, 'download']);

route::controller(KebijakanPrivasiController::class)->group(function(){
    Route::get('/superadmin/master/kebijakanprivasi/index', 'index')->name('index');
    Route::get('/superadmin/master/kebijakanprivasi/detail', 'show');
    Route::put('/superadmin/master/kebijakanprivasi/simpan', 'update');
    Route::get('/superadmin/master/kebijakanprivasi/edit', 'edit');
});
Route::resource('/keb', KebijakanPrivasiController::class);

//FAQ atau PUSAT BANTUAN
Route::controller(FaqController::class)->group(function(){
    Route::get('/superadmin/master/faq/index', 'index');
    Route::get('/superadmin/master/faq/detail', 'show');
    Route::put('/superadmin/master/faq/simpan', 'update');
    Route::get('/superadmin/master/faq/edit', 'edit');
});
Route::resource('/faq', FaqController::class);




// Route::get("/layout", function() {
//     return view("layouts_admin.admin_layout");
// });

Route::controller(HomeController::class)->group(function(){
    Route::get('/superadmin/master/home/index', 'index')->name('index');
    Route::get('/superadmin/master/home/detail', 'show');
    Route::put('/superadmin/master/home/simpan', 'update');
    Route::get('/superadmin/master/home/edit', 'edit');
});
Route::resource('/home', HomeController::class);

Route::get("/dashboard", function() {
    return view("admin.dashboard");
});

Route::get("/template_admin", function() {
    return view("admin.layouts.app");
});

Route::controller(VendorController::class)->group(function(){
    Route::get('/vendor/homelagi', 'index')->middleware('role:vendor')->name('vendor.index');
    Route::get('/vendor/vendor/profilevendor/Notifikasi', 'Notifikasi');
    Route::get('/vendor/vendor/profilevendor/Kebijakan_privasi', 'KebijakanPrivasi');
    Route::get('/vendor/vendor/profilevendor/Ketentuan_layanan', 'KetentuanLayanan');
    Route::get('/vendor/vendor/profilevendor/Pusat_bantuan', 'PusatBantuan');
    //ORDER pesanan
    Route::get('/vendor/vendor/order/kendaraan/orderan_baru', 'OrderanBaru')->middleware('auth');
    Route::get('/vendor/vendor/order/bangunan/orderan_bangunan', 'OrderanBarubangunan')->middleware('auth');
    Route::get('/vendor/vendor/order/barang/orderan_barang', 'OrderanBarubarang')->middleware('auth');
    Route::get('/vendor/vendor/order/pickup/orderan_pickup', 'OrderanBarupickup')->middleware('auth');
    Route::get('/vendor/vendor/order/kendaraan/rincian_baru', 'RincianBaru')->middleware('auth');

    Route::get('/vendor/vendor/history/kendaraan/historybaru', 'historybaru');
    Route::get('/vendor/vendor/Profile/profile_vendor', 'ProfileVendor')->middleware('auth');
    Route::get('/vendor/vendor/Profile/edit_profilevendor', 'EditProfile')->middleware('auth');
    Route::get('/vendor/vendor/Profile/profile_vendor', 'EditAlamat')->middleware('auth');
    Route::get('/vendor/vendor/Profile/Notifikasi', 'Notifikasi')->middleware('auth');
    Route::get('/vendor/vendor/Profile/Kebijakanprivasi', 'KebijakanPrivasi')->middleware('auth');
    Route::get('/vendor/vendor/Profile/Ketentuan_layanan', 'KetentuanLayanan')->middleware('auth');
    Route::get('/vendor/vendor/Profile/Pusat_bantuan', 'PusatBantuan')->middleware('auth');

    Route::get('/vendor/vendor/kelola-kendaraan/atur_alamat', 'AturAlamat')->middleware('auth');
    Route::get('/vendor/vendor/Kelola-Kendaraan/Rincian_lahan', 'rincian')->middleware('auth');
    Route::get('/vendor/vendor/Kelola-Kendaraan/setelah_input', 'stlinput')->middleware('auth');
    Route::get('/vendor/vendor/homelagi', 'index')->middleware('auth');
    //Kendaraan
    Route::get('/vendor/vendor/Kelola-Kendaraan/layanan_step1', 'lyn1') ;
    Route::get('/vendor/vendor/Kelola-Kendaraan/layanan_step2', 'lyn2') ;
    Route::get('/vendor/vendor/Kelola-Kendaraan/layanan_step3', 'lyn3') ;
    Route::get('/vendor/vendor/Kelola-Kendaraan/layanan_step4', 'lyn4') ;
    Route::get('/vendor/vendor/Kelola-Kendaraan/kelola_kendaraan', 'kelolakendaraan') ;
    Route::get('/vendor/vendor/Kelola-Kendaraan/atur_alamat', 'aturalamatken') ;

    //Bangunan
    Route::get('/vendor/vendor/Kelola-Bangunan/layanan_step1', 'lynbangunan1');
    Route::get('/vendor/vendor/Kelola-Bangunan/layanan_step2', 'lynbangunan2');
    Route::get('/vendor/vendor/Kelola-Bangunan/layanan_step3', 'lynbangunan3');
    Route::get('/vendor/vendor/Kelola-Bangunan/kelola_bangunan', 'kelolabangunan');
    Route::get('/vendor/vendor/Kelola-Bangunan/setelah_input', 'stlinputbangunan');
    Route::get('/vendor/vendor/Kelola-Bangunan/pengelolaan_barang', 'pengelolaanbrg');

    //Barang
    Route::get('/vendor/vendor/Kelola_Barang/kelola_layanan', 'kelolabarang');
    Route::get('/vendor/vendor/Kelola_Barang/layanan_step1', 'lynbarang1');
    Route::get('/vendor/vendor/Kelola_Barang/layanan_step2', 'lynbarang2');
    Route::get('/vendor/vendor/Kelola_Barang/layanan_step4', 'lynbarang4');
    Route::get('/vendor/vendor/Kelola_Barang/setelah_input', 'stlinputbarang');
    Route::get('/vendor/vendor/Kelola_Barang/atur_alamat', 'aturalamatbrg');

    //Pickup
    Route::get('/vendor/vendor/Kelola-Pickup/kelola_pickup', 'kelolapickup');
    Route::get('/vendor/vendor/Kelola-Pickup/layanan_step1', 'lynpickup1');
    Route::get('/vendor/vendor/Kelola-Pickup/layanan_step2', 'lynpickup2');
    Route::get('/vendor/vendor/Kelola-Pickup/layanan_step3', 'lynpickup3');
    Route::get('/vendor/vendor/Kelola-Pickup/atur_alamat', 'aturalamatpickup');
    Route::get('/vendor/vendor/Kelola-Pickup/setelah_input', 'stlinputpickup');

    //KEUANGAN
    Route::get('/vendor/vendor/keuangan/pemasukan', 'pemasukan');
    Route::get('/vendor/vendor/keuangan/penarikan', 'penarikan');
    Route::get('/vendor/vendor/keuangan/penghasilan', 'penghasilan');
    Route::get('/vendor/vendor/keuangan/rekening', 'rekening');
    Route::get('/vendor/vendor/keuangan/saldo', 'saldo');
    Route::get('/vendor/vendor/keuangan/tarikdana', 'tarikdana');
    Route::get('/vendor/vendor/keuangan/history_penarikan', 'historypenarikan');

    //Pusat Bantuan
    Route::get('/vendor/vendor/profilevendor/Jawaban1', 'jawaban1');
    Route::get('/vendor/vendor/profilevendor/Jawaban2', 'jawaban2');
    Route::get('/vendor/vendor/profilevendor/Jawaban3', 'jawaban3');
    Route::get('/vendor/vendor/profilevendor/Jawaban4', 'jawaban4');
    Route::get('/vendor/vendor/profilevendor/Jawaban5', 'jawaban5');
    Route::get('/vendor/vendor/profilevendor/Jawaban6', 'jawaban6');
});

Route::get('/vendor/vendor/setting', [VendorController::class, 'setting']);

//Lengkapi Data
Route::controller(DataDiriVendorController::class)->group(function(){
    Route::get('/vendor/login/datadiri', 'indexp');
    Route::patch('/vendor/login/datadiri/{id}','update')->name('datadiri.update');
});

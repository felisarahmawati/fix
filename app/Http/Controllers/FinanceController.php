<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function dashboard_fin()
    {
        return view("finance.finance.dashboard_finance");
    }
    public function index()
    {
        return view('finance.page');
    }
    public function transaksiuser()
    {
        return view('finance.transaksi.transaksiuser');
    }
    public function transaksivendor()
    {
        return view('finance.transaksi.transaksivendor');
    }
    public function detailtransaksiuser()
    {
        return view('finance.transaksi.detailtransaksiuser');
    }
    public function detailtransaksivendor()
    {
        return view('finance.transaksi.detailtransaksivendor');
    }
    public function penarikan()
    {
        return view('finance.DataPenarikan.penarikan');
    }
    public function konfirmasi()
    {
        return view('finance.DataPenarikan.konfirmasi');
    }
    public function history()
    {
        return view('finance.DataPenarikan.history');
    }
    public function profile()
    {
        return view('finance.profilefinance');
    }
    public function vendor()
    {
        return view('finance.DataPenarikan.vendor');
    }

    public function laporan()
    {
        return view('finance.laporan.laporan');
    }

    public function laporansistem()
    {
        return view('finance.laporan.laporansistem');
    }

    public function laporanfinance()
    {
        return view('finance.laporan.laporanfinance');
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $total_penduduk = Penduduk::count();

        $page_attr = adminBreadcumb(h_prefix(), addDashboard: false);

        $view = path_view('pages.admin.dashboard');
        $data = compact(
            'total_penduduk',
            'page_attr',
            'view',
        );
        $data['compact'] = $data;
        return view($view, $data);
    }
}

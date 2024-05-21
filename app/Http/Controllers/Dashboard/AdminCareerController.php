<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Career;

class AdminCareerController extends Controller
{
    public function index()
    {
        // جلب جميع الطلبات من قاعدة البيانات
        $careers = Career::all();

        // إعادة عرض الطلبات في الجدول
        return view('dashboard.career.index', compact('careers'));
    }
}

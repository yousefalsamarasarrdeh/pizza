<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Website\CareerController;
use App\Http\Controllers\Dashboard\AdminCareerController;
use App\Http\Controllers\Dashboard\AdminContactController;
use App\Http\Controllers\Dashboard\AdminPageController;
use App\Http\Controllers\Website\ContactController;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ContactsExport;




Route::middleware(['set-locale'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Website\HomeController::class, 'index'])->name('Home');
    Route::get('/home', [\App\Http\Controllers\Website\HomeController::class, 'index']);
    Route::get('/FAQ', [\App\Http\Controllers\Website\HomeController::class, 'FAQ'])->name('FAQ');
    Route::get('/Franchise', [\App\Http\Controllers\Website\HomeController::class, 'Franchise'])->name('Franchise');
    Route::get('/lang', [\App\Http\Controllers\Website\HomeController::class, 'test']);
    Route::get('/about',[\App\Http\Controllers\Website\HomeController::class, 'about'])->name('about');

    // go to dashboard
    Route::get('/mydashboard', function () {
        return view('layouts.Dashboard.mainlayout');
    })->middleware('isadmin');
    // login
    Route::get('/log', function () {
        return view('layouts.app');
    });
    //careers
    Route::get('/careers/create', [CareerController::class, 'create'])->name('careers.create');
    Route::post('/careers', [CareerController::class, 'store'])->name('careers.store');
    //contact
    Route::get('contacts/create', [ContactController::class, 'create'])->name('contacts.create');
    Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');






    Route::get('/admin/careers', [AdminCareerController::class, 'index'])->name('admin.careers.index')->middleware('isadmin');

    //admin contact
    Route::middleware(['isadmin'])->group(function () {
        Route::get('/admin/contact', [AdminContactController::class, 'index'])->name('admin.contact.index');
        Route::delete('/admin/contact/{id}', [AdminContactController::class, 'destroy'])->name('admin.contact.destroy');
        Route::get('/admin/contact/export', [AdminContactController::class, 'export'])->name('admin.contact.export');

        // page
        Route::get('/admin/page', [AdminPageController::class, 'index'])->name('admin.pages.index');
        Route::get('/pages/{id}/edit', [AdminPageController::class, 'edit'])->name('admin.pages.edit');
        Route::put('/pages/{id}', [AdminPageController::class, 'update'])->name('pages.update');

    });

});



Route::get('set/lang/{lang}',function ($lang){
    if(in_array($lang,['en','ar'])) {
        setcookie('lang',$lang,time()+(68*24*365),'/');
    }
    return redirect()->back();
}) ;

Auth::routes();



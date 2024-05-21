<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Website\CareerController;
use App\Http\Controllers\Dashboard\AdminCareerController;
use App\Http\Controllers\Dashboard\AdminContactController;
use App\Http\Controllers\Website\ContactController;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ContactsExport;




Route::middleware(['set-locale'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Website\HomeController::class, 'index'])->name('Home');
    Route::get('/home', [\App\Http\Controllers\Website\HomeController::class, 'index']);
    Route::get('/lang', [\App\Http\Controllers\Website\HomeController::class, 'test']);


    Route::get('/mydashboard', function () {
        return view('layouts.Dashboard.mainlayout');
    })->middleware('isadmin');

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
    });

});



Route::get('set/lang/{lang}',function ($lang){
    if(in_array($lang,['en','ar'])) {
        setcookie('lang',$lang,time()+(68*24*365),'/');
    }
    return redirect()->back();
}) ;

Auth::routes();



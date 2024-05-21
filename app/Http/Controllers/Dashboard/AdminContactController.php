<?php

namespace App\Http\Controllers\Dashboard;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ContactsExport;
use App\Http\Controllers\Controller;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        // جلب جميع الطلبات من قاعدة البيانات
        $contact = Contact::all();

        // إعادة عرض الطلبات في الجدول
        return view('dashboard.contact.index', compact('contact'));
    }
    public function destroy($id)
    {
        $record = Contact::findOrFail($id);
        $record->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Record deleted successfully.');
    }
    public function export()
    {
        return Excel::download(new ContactsExport, 'contacts.xlsx');
    }
}

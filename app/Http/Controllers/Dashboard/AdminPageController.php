<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class AdminPageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('dashboard.page.index', compact('pages'));
    }
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('dashboard.page.edit', compact('page'));
    }

    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->title = $request->input('title');
        $page->description_ar = $request->input('description_ar');
        $page->description_en = $request->input('description_en');

        for ($i = 1; $i <= 5; $i++) {
            if ($request->hasFile('image_' . $i)) {
                $file = $request->file('image_' . $i);
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('public', $filename);
                $page->{'image_' . $i} = $filename;
            }
        }

        $page->save();
        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully');
    }

}

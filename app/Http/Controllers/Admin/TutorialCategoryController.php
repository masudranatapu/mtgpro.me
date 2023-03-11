<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tutorial;
use App\Models\TutorialCategory;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class TutorialCategoryController extends Controller
{
    //
    public function index()
    {
        $tutorialcategories = TutorialCategory::latest()->paginate(10);
        return view('admin.tutorials_manage.category.index', compact('tutorialcategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|unique:tutorial_categories,title'
        ]);

        $tutorialCategory = new TutorialCategory();
        $tutorialCategory->title = $request->title;
        $tutorialCategory->slug = str_replace(' ', '-', $request->title);
        $tutorialCategory->status = $request->status;
        $tutorialCategory->save();

        Toastr::success(trans('Tutorial category created successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();

    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:255|unique:tutorial_categories,title,' . $id
        ]);

        $tutorialcategory = TutorialCategory::findOrFail($id);

        $tutorialcategory->title = $request->title;
        $tutorialcategory->slug = str_replace(' ', '-', $request->title);
        $tutorialcategory->status = $request->status;
        $tutorialcategory->save();

        Toastr::success(trans('Tutorial category updated successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();

    }

    public function destroy($id)
    {
        $result = Tutorial::where('category_id', $id)->get();
        $tutorialcategory = TutorialCategory::findOrFail($id);

        if (isset($result) && $result->count() > 0) {

            Toastr::success(trans('Tutorials category already in used delete it first'), 'Success', ["positionClass" => "toast-top-center"]);
            return redirect()->back();

        } else {

            $tutorialcategory->delete();

            Toastr::success(trans('Tutorials category delete successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
            return redirect()->back();
        }

    }

}

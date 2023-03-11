<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tutorial;
use App\Models\TutorialCategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TutorialController extends Controller
{
    //
    public function index()
    {
        $tutorials = Tutorial::latest()->paginate(10);
        return view('admin.tutorials_manage.tutorials.index', compact('tutorials'));
    }

    public function create()
    {
        $tutorialCategories = TutorialCategory::where('status', 1)->get();
        return view('admin.tutorials_manage.tutorials.create', compact('tutorialCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publish_date' => 'required|date',
            'banner_image' => 'required|file|mimes:png,jpg',
            'category_id' => 'required',
            'discription' => 'required',
            'short_description' => 'required|max:150',
        ]);

        $tutorial = new Tutorial();
        $tutorial->title = $request->title;
        $tutorial->slug = Str::slug($request->title);
        $tutorial->short_description = $request->short_description;

        $tutorial->author = $request->author;
        $tutorial->tags = $request->tags;
        $tutorial->publish_date = date('Y-m-d', strtotime($request->publish_date));

        if ($request->has('banner_image')) {

            $tutorial->banner_image = uploadBlogImage($request->banner_image, "postBanner", 760, 500);
        }

        $content = $request->discription;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');
        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/upload/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);
            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $tutorial->content = $content;
        $tutorial->category_id = $request->category_id;
        $tutorial->status = $request->status;
        $tutorial->save();

        Toastr::success(trans('Tutorial created successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.tutorials.index');
    }

    public function edit($id)
    {
        $tutorial = Tutorial::findOrFail($id);
        $tutorialCategories = TutorialCategory::where('status', 1)->get();
        return view('admin.tutorials_manage.tutorials.create', compact('tutorialCategories', 'tutorial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publish_date' => 'required|date',
            'banner_image' => 'file|mimes:png,jpg',
            'category' => 'required',
            'short_description' => 'required',
            'discription' => 'required',
            'short_description' => 'required|max:150',
        ]);

        $tutorial = Tutorial::findOrFail($id);
        $tutorial->title = $request->title;
        $tutorial->slug = Str::slug($request->title);
        $tutorial->author = $request->author;
        $tutorial->publish_date = date('Y-m-d', strtotime($request->publish_date));

        if ($request->has('banner_image')) {

            $tutorial->banner_image = uploadBlogImage($request->banner_image, "postBanner", 760, 500);
        }

        $content = $request->discription;

        if (str_contains($content, "base64")) {
            $dom = new \DomDocument();
            $internalErrors = libxml_use_internal_errors(true);
            libxml_use_internal_errors($internalErrors);
            $dom->recover = true;
            $dom->strictErrorChecking = false;
            $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $imageFile = $dom->getElementsByTagName('img');
            foreach ($imageFile as $item => $image) {
                $data = $image->getAttribute('src');
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $imgeData = base64_decode($data);
                $image_name = "/upload/" . time() . $item . '.png';
                $path = public_path() . $image_name;
                file_put_contents($path, $imgeData);
                $image->removeAttribute('src');
                $image->setAttribute('src', $image_name);
            }
        }

        $tutorial->content = $content;
        $tutorial->category_id = $request->category;
        $tutorial->status = $request->status;
        $tutorial->tags = $request->tags;
        $tutorial->short_description = $request->short_description;
        $tutorial->save();

        Toastr::success(trans('Tutorial updated successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.tutorials.index');

    }

    public function destroy($id)
    {
        $tutorial = Tutorial::findOrFail($id);

        $tutorial->delete();
        Toastr::success(trans('Tutorial deleted successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.tutorials.index');
    }

}

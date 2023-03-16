<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tutorial;
use App\Models\TutorialCategory;
use Brian2694\Toastr\Facades\Toastr;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TutorialController extends Controller
{
    //
    public function index()
    {
        $tutorials = Tutorial::orderBy('title', 'asc')->latest()->get();
        return view('admin.tutorials_manage.tutorials.index', compact('tutorials'));
    }

    public function create()
    {
        $tutorialCategories = TutorialCategory::where('status', 1)->get();
        return view('admin.tutorials_manage.tutorials.create', compact('tutorialCategories'));
    }

    public function youtubeVideoEmbad($url)
    {
        $query = parse_url($url . '&mkds');
        if (isset($query['query'])) {
            $remove_extra = substr($query['query'], 0, strpos($query['query'], "&"));
            $_query = $remove_extra;
            $video_id = trim($_query, 'v=');
        } else {
            $video_id = explode('/', $url);
            $video_id = end($video_id);
        }

        $video_file = 'https://www.youtube.com/embed/'.$video_id;
        return $video_file;
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publish_date' => 'required|date',
            'file_url' => 'required',
            'category_id' => 'required',
            'discription' => 'required',
            'short_description' => 'required|max:150',
        ], [
            'short_description.required' => 'The short description required',
            'short_description.max' => 'The short description must be less then 150 characters.',
        ]);

        $tutorial = new Tutorial();
        $tutorial->title = $request->title;
        $tutorial->slug = Str::slug($request->title);
        $tutorial->short_description = $request->short_description;

        $tutorial->author = $request->author;
        $tutorial->tags = $request->tags;
        $tutorial->publish_date = date('Y-m-d', strtotime($request->publish_date));

        $tutorial->file_type = $request->file_type;

        if($request->file_type == 1) {

            if ($request->has('file_url')) {

                $tutorial->file_url = uploadBlogImage($request->file_url, "tutorialsimage", 500, 250);
            }

        }else if($request->file_type == 2) {

            $tutorial_video = $request->file('file_url');
            $slug = 'tutorialsvideo';
            $tutorial_video_name = $slug.'-'.uniqid().'.'.$tutorial_video->getClientOriginalExtension();
            $upload_path = 'uploads/tutorialsvideo/';
            $tutorial_video->move($upload_path, $tutorial_video_name);

            $image_url = $upload_path.$tutorial_video_name;
            $tutorial->file_url = $image_url ;

        }else {

            $tutorial->file_url = $this->youtubeVideoEmbad($request->file_url);

        }

        $content = $request->discription;

        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHtml($content);
        $imageFile = $dom->getElementsByTagName('img');
        // dd($imageFile);
        foreach ($imageFile as $item => $image) {

            $data = $image->getAttribute('src');

            if ($data != '') {

                $existimage = explode('//', $data);
                // dd($existimage);

                if($existimage[0] == 'https:' || $existimage[0] == 'http:') {

                    // return 1;

                }else {

                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $imgeData = base64_decode($data);
                    // dd($imgeData);
                    $image_name = time() . $item . '.png';
                    $src = url('uploads/descriptioniamges/' . $image_name);
                    file_put_contents(public_path('uploads/descriptioniamges/' . $image_name), $imgeData);

                    $image->removeAttribute('src');
                    $image->setAttribute('src', $src);

                }
            }
        }

        $content = $dom->saveHTML();

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
        return view('admin.tutorials_manage.tutorials.edit', compact('tutorialCategories', 'tutorial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publish_date' => 'required|date',
            'category_id' => 'required',
            'short_description' => 'required',
            'discription' => 'required',
            'short_description' => 'required|max:150',
        ]);

        $tutorial = Tutorial::findOrFail($id);
        $tutorial->title = $request->title;
        $tutorial->slug = Str::slug($request->title);
        $tutorial->author = $request->author;
        $tutorial->publish_date = date('Y-m-d', strtotime($request->publish_date));

        $tutorial->file_type = $request->file_type;

        if($request->file_type == 1) {

            if ($request->has('file_url')) {

                $tutorial->file_url = uploadBlogImage($request->file_url, "tutorialsimage", 500, 250);


                $oldFileUrl = Tutorial::findOrFail($id);

                if(file_exists($oldFileUrl->file_url)) {
                    unlink($oldFileUrl->file_url);
                }

            }

        }else if($request->file_type == 2) {

            $tutorial_video = $request->file('file_url');

            if($tutorial_video) {

                $slug = 'tutorialsvideo';
                $tutorial_video_name = $slug.'-'.uniqid().'.'.$tutorial_video->getClientOriginalExtension();
                $upload_path = 'uploads/tutorialsvideo/';
                $tutorial_video->move($upload_path, $tutorial_video_name);

                $oldFileUrl = Tutorial::findOrFail($id);

                if(file_exists($oldFileUrl->file_url)) {
                    unlink($oldFileUrl->file_url);
                }

                $image_url = $upload_path.$tutorial_video_name;
                $tutorial->file_url = $image_url ;

            }else {

                $oldFileUrl = Tutorial::findOrFail($id);
                $tutorial->file_url = $oldFileUrl->file_url ;

            }

        }else {

            $tutorial->file_url = $this->youtubeVideoEmbad($request->file_url);

            $oldFileUrl = Tutorial::findOrFail($id);

            if(file_exists($oldFileUrl->file_url)) {
                unlink($oldFileUrl->file_url);
            }

        }

        $content = $request->discription;

        if (str_contains($content, "base64")) {
            $dom = new DomDocument();
            $internalErrors = libxml_use_internal_errors(true);
            libxml_use_internal_errors($internalErrors);
            $dom->recover = true;
            $dom->strictErrorChecking = false;
            $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $imageFile = $dom->getElementsByTagName('img');
            foreach ($imageFile as $item => $image) {

                $data = $image->getAttribute('src');

                $existimage = explode('//', $data);

                if($existimage[0] == 'https:' || $existimage[0] == 'http:') {

                    // return 1;

                }else {

                    // return 0;

                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);

                    $imgeData = base64_decode($data);

                    $image_name = time() . $item . '.png';
                    $src = url('uploads/descriptioniamges/' . $image_name);
                    file_put_contents(public_path('uploads/descriptioniamges/' . $image_name), $imgeData);

                    $image->removeAttribute('src');
                    $image->setAttribute('src', $src);

                }
            }
        }

        $tutorial->content = $content;
        $tutorial->category_id = $request->category_id;
        $tutorial->status = $request->status;
        $tutorial->tags = $request->tags;
        $tutorial->short_description = $request->short_description;
        $tutorial->save();

        Toastr::info(trans('Tutorial updated successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.tutorials.index');

    }

    public function destroy($id)
    {
        $tutorial = Tutorial::findOrFail($id);

        if(file_exists($tutorial->file_url)) {
            unlink($tutorial->file_url);
        }

        $tutorial->delete();

        Toastr::error(trans('Tutorial deleted successfully!'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.tutorials.index');
    }


}

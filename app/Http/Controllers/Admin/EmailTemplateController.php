<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\EmailTemplate;
use App\Models\EmailTemplateTag;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class EmailTemplateController extends Controller
{
    //
    public function index()
    {
        $emailtemplates = EmailTemplate::latest()->get();
        return view('admin.emailtemplate.index', compact('emailtemplates'));
    }

    public function edit($id)
    {
        $emailtemplates = EmailTemplate::with('hasTags')->findOrFail($id);
        return view('admin.emailtemplate.edit', compact('emailtemplates'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'type' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ]);

        EmailTemplate::findOrFail($id)->update([
            'type' => $request->type,
            'slug' => Str::slug($request->type),
            'subject' => $request->subject,
            'body' => $request->body,
            'updated_at' => Carbon::now(),
        ]);

        Toastr::success(trans('Data Successfully Updated !'), 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.email.template');
    }


    public function sortCodeDoc(Request $request)
    {
        $sort_codes = EmailTemplateTag::with('hasEmailTemplate')->get();
        return view('admin.emailtemplate.sortcode', compact('sort_codes'));
    }
}

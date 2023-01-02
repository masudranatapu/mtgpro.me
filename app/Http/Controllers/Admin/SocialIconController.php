<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use Carbon\Carbon;

class SocialIconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $socileicons = DB::table('social_icon')->orderBy('order_id', 'desc')->paginate(50);
        return view('admin.socialicon.index', compact('socileicons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.socialicon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'icon_group' => 'required',
            'icon_name' => 'required',
            'icon_fa' => 'required',
            'icon_title' => 'required',
            'example_text' => 'required',
            'order_id' => 'required',
        ],[
            'icon_group.required' => 'Icon group is required',
            'icon_name.required' => 'Icon name is required',
            'icon_fa.required' => 'Icon fa is required',
            'icon_title.required' => 'Icon title is required',
            'example_text.required' => 'Icon example text is required',
            'order_id.required' => 'Order by id is required',
        ]);

        DB::table('social_icon')->insert([
            'icon_group' => $request->icon_group,
            'icon_name' => $request->icon_name,
            'icon_fa' => $request->icon_fa,
            'icon_title' => $request->icon_title,
            'example_text' => $request->example_text,
            'status' => $request->status,
            'order_id' => $request->order_id,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Social icon successfully save :-)','Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $socileicons = DB::table('social_icon')->where('id', $id)->first();
        return view('admin.socialicon.edit', compact('socileicons'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'icon_group' => 'required',
            'icon_name' => 'required',
            'icon_fa' => 'required',
            'icon_title' => 'required',
            'example_text' => 'required',
            'order_id' => 'required',
        ],[
            'icon_group.required' => 'Icon group is required',
            'icon_name.required' => 'Icon name is required',
            'icon_fa.required' => 'Icon fa is required',
            'icon_title.required' => 'Icon title is required',
            'example_text.required' => 'Icon example text is required',
            'order_id.required' => 'Order by id is required',
        ]);

        DB::table('social_icon')->where('id', $id)->update([
            'icon_group' => $request->icon_group,
            'icon_name' => $request->icon_name,
            'icon_fa' => $request->icon_fa,
            'icon_title' => $request->icon_title,
            'example_text' => $request->example_text,
            'status' => $request->status,
            'order_id' => $request->order_id,
            'icon_name' => $request->icon_name,
            'created_at' => Carbon::now(),
        ]);

        Toastr::info('Social icon successfully updated :-)','Success');
        return redirect()->route('admin.social-icon.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('social_icon')->where('id', $id)->delete();
        Toastr::success('Social icon successfully deleted :-)','Info');
        return redirect()->back();

    }
}

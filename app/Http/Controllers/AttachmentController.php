<?php

namespace App\Http\Controllers;

use App\Attachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AttachmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'file_name' => 'mimes:jpeg,png,jpg',

        ], [
            'file_name.mimes' => 'Attachment format should be jpeg, png, jpg',
        ]);

        if ($request->hasFile('file_name')) {
            $image = $request->file_name;
            $file_name = $image->getClientOriginalName();


            $attachments = new Attachment();
            $attachments->url_logo = $file_name;
            $attachments->hospital_id = $request->id_inp;
            $attachments->save();

            // move pic
            $imageName = $request->file_name->getClientOriginalName();
            $request->file_name->move(public_path('Attachments/' . $request->id_inp), $imageName);

            session()->flash('Add', 'تم اضافة المرفق بنجاح');
            return back();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function show(Attachment $attachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function edit(Attachment $attachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attachment $attachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
  public function destroy(Request $request)
    {
        $id= $request->id_inp;

        Attachment::where('id',$id)->delete();
        Storage::deleteDirectory('Attachments/'.$request->name_inp);
        session()->flash('delete', 'Data has been deleted successfully');
        return back();

    }
    
     public function gallery(Request $request)
    {

        $input=$request->all();
        $file_name=array();
          $id = $request->id_inp;
        if($files=$request->file('file_name')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move(public_path('Attachments/' . $id), $name);
                $file_name[]=$name;
            }

            /*Insert your data*/
            for ($i = 0 ; $i < count($file_name) ; $i++) {
                Attachment::insert([
                    'url_logo' => $file_name[$i],
                    'slider' => 1,
                    'hospital_id' => $input['id_inp'],
                ]);
            }
        }



        session()->flash('Add', 'تم اضافة المرفق بنجاح');
        return back();
    }
}

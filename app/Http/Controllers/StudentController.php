<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Student;
use Route;
use Illuminate\Auth\Authenticatable;
use Redirect, Response;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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
       $data = request()->validate([
           'name' =>'required|min:4|max:25',
           'email' => 'required|unique:students|max:25',
           'phone' => 'required|unique:students|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:9| starts_with: 6,7,8,9',
           'place'=>'required',
           'department'=>'required'
       ]);

       Student::create($data);
       return Redirect::to('/home')->withSuccess(' Student Form Succesfully submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data= Student::all();
        return view('admin',['students'=>$data]);
    }
    public function delete($id)
    {
       DB ::table ('students')->where('id',$id)->delete();
       return back()->with('contact_delete','Student deleted succesfully');
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
    }


}

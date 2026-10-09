<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contactme');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          $data=Enquiry::All();
        return view("showenquiries",compact("data"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                "name"          =>"required",
                "email"         =>"required",
                "phone"         =>"required",
                "message"       =>"required"
        ]);
        Enquiry::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "phone"=>$request->phone,
            "message"=>$request->message
        ]);
        return redirect("/home")->with("success","project is added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Enquiry $enquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enquiry $enquiry)
    {
        //
    }
}

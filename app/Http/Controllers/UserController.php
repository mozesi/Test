<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteUser;

class UserController extends Controller
{

    public $subscriptionRules =[
        'user_id' => 'required',
        'website_id' =>'required',
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Subscribe user 
     */
    public function subscribe(Request $request)
    {
       $request->validate($this->subscriptionRules);
       return WebsiteUser::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Helpers\UploadsFiles;
use App\Models\ProfileAvatar;
use Illuminate\Http\Request;

class ProfileAvatarController extends Controller
{
  
    public function index()
    {
        $photos = ProfileAvatar::all();
        return  view('users',compact('photos'));
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
        $photo = $request->file('file-input');
        if ($photo) {
            $photoName=uniqid('avatar_',true).'.'.$photo->getClientOriginalExtension();
            $photo->move(UploadsFiles::getUploadPath('profile_photos'),$photoName);
        }
        $image = ProfileAvatar::create([
            'avatar'=>$photoName
        ]);
        dd($image);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfileAvatar  $profileAvatar
     * @return \Illuminate\Http\Response
     */
    public function show(ProfileAvatar $profileAvatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfileAvatar  $profileAvatar
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfileAvatar $profileAvatar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProfileAvatar  $profileAvatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfileAvatar $profileAvatar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfileAvatar  $profileAvatar
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfileAvatar $profileAvatar)
    {
        //
    }
}

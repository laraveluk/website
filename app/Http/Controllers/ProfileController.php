<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\User as UserResource;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = User::fullProfile()->findOrFail($id);
        $profile = new UserResource($profile);

        return view('frontend.profile.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = User::fullProfile()->findOrFail($id);
        $profile = new UserResource($profile);

        return view('frontend.profile.edit', compact('profile'));
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\ProfileKey;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\User as UserResource;

class ProfileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param $user_id
     * @return UserResource
     */
    public function show($user_id)
    {
        $profile = User::fullProfile()->findOrFail($user_id);
        return new UserResource($profile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $user_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        if ($user_id != auth()->id()) {
            return response([
                'status' => 'error'
            ]);
        }

        $errors = [];
        $user = User::findOrFail($user_id); // Check user exists

        foreach ($request->except(['_method']) as $key => $value) {

            // Check the key exists in the profile_keys table
            $pk = ProfileKey::where('name', $key)->first();

            if ($pk) {

                // Check whether we are updating that key or if we should create a new one.
                $profile = Profile::where('user_id', $user->id)->where('profile_key_id', $pk->id)->first();

                if (!$profile) {
                    $profile = new Profile();
                    $profile->user_id = $user_id;
                    $profile->profile_key_id = $pk->id;
                }

                // Create the profile line in the profiles table
                $this->createResource($profile, $value);

            } else {
                // Build a list of errors
                $errors[$key] = $key . " does not exist in the profile keys table";
            }
        }

        return response([
            'status' => 'ok',
            'user_profile' => $user->profiles()->get(),
            'errors' => $errors
        ]);
    }

    private function createResource(Profile $profile, $value)
    {
        $profile->value = $value;
        $profile->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Profile $profile
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Profile $profile)
    {
        if ($profile->user_id != auth()->id()) {
            return response([
                'status' => 'error'
            ]);
        }

        if (auth()->user()) {
            Log::debug(auth()->user()->name . " deleted profile line {$profile->id}");
        }

        $profile->delete();

        return response([
            'status' => 'deleted'
        ]);
    }

}

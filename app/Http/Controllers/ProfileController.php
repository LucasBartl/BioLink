<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProfileRequest;

use App\Models\User;

/**
 * @property-read UploadedFile $photo
 **/
class ProfileController extends Controller
{

    public function index()
    {
        return view('profile', [
            'user' => auth()->user()
        ]);
    }

    public function update(ProfileRequest $request)
    {
        /* @var User $user */
        $user = auth()->user();

        $data = $request->validated();

        /* Aqui caso tenha uma foto, nos iremos guardar ela  */
        if ($file = $request->photo) {
           $data['photo'] =  $file->store('photos');
        }


        $user->fill($data)->save();
        return back()
            ->with('message', "Profile atualizado com sucesso!");
    }
}

<?php


namespace App\Repositories;


use App\Models\User;
use Illuminate\Http\Request;

class UserRepository
{

    public function add(Request $request){
        $user = new User($request->except('verified'));
        if ($request->has('password'))
            $user->password = bcrypt($request->get('password'));
        if ($request->has('verified'))
            $user->verified = 1;

        $user->save();
    }

    public function update (Request $request,User $user){
        $user->update($request->except('verified'));
        if ($request->has('password'))
            $user->password = bcrypt($request->get('password'));
        if (($request->has('verified')) && (!$user->verified))
            $user->verified = 1;
        else if ((!$request->has('verified')) && ($user->verified))
            $user->verified = 0;

        $user->save();

    }

    public function delete (User $user){
        $user->delete();
    }

}
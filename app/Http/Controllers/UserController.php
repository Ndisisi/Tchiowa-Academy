<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users=User::get();
       return view ('users.index',compact('users')); 
    }

    public function show($id)
    {
      // $user=User::where('id',$id)->first();
       if(!$user=User::find($id))
       return redirect ()->route('users.index');
       return view ('users.show',compact('user')); 
    }

    public function create()
    {
        return view ('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {

        $date = $request->all();
        $date['password'] = bcrypt($request->password);

        $user = User::create($date);

        return redirect()->route('users.index');
        //return redirect()->route('users.show', $user->id);

        // $user=new User;
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();


        
    }
    public function edit($id)
    {
        if(!$user=User::find($id))
        return redirect ()->route('users.index');

        return view ('users.edit', compact ('user'));
    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if(!$user=User::find($id))
        return redirect()->route('users.index');

        $data = $request->only('name','email');
        if($request->password)
        $data['password'] = bcrypt($request->password);

        $user->update($data);
        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        if(!$user=User::find($id))
        return redirect ()->route('users.index');

        $user->delete();
        return redirect ()->route('users.index');
    }

}

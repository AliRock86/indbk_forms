<?php

namespace App\Http\Controllers;

use JWTAuth;
use Validator;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Collections\UserCollection;

class UserControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\UserCollection
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);

        $user = User::all();

        return new UserCollection($user);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @return \App\Http\Resources\UserResource
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'full_name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required|unique:users',
           ]);
           if($validator->fails()){
               return response()->json([
                   'success' => false ,
                   'data' => $validator->messages(),
               ],400);
           }

           $user = new User;
           $user->full_name = $request->full_name;
           $user->email = $request->email;
           $user->password = Hash::make($request->password);
           $user->phone = $request->phone;
           $user->role_id = 1;
           $user->status_id = 1;
           $user->save();
            $request->request->add(['role_id' => 1,'status_id' => 1]);
            $credentials = $request->only(['user_phone','password','role_id']);

            return response()->json([
               'success' => true ,
               'data' => JWTAuth::attempt($credentials)
           ], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \App\Http\Resources\UserResource
     */
    public function show(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'password' => 'required|min:8',
            'phone' => 'required',
           ]);
           if($validator->fails()){
               return response()->json([
                   'success' => false ,
                   'data' => $validator->messages(),
               ],400);
           }
           $request->request->add(['role_id' => 1,'status_id' => 1]);
           $credentials = $request->only(['user_phone','password','role_id']);

           try{
            if (!$token = JWTAuth::attempt($credentials)) {
                throw new Exception('invalid_credentials');
            }
            return response()->json([
                'success' => true ,
                'data' => $token
            ], 200);
           }catch(Exception $e){
            return response()->json([
                'success' => false ,
                'data' => 'invalid_credentials'
            ], 402);
           }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\Models\User  $user
     * @return \App\Http\Resources\UserResource
     */
    public function update(UserRequest $request, User $user)
    {
        $this->authorize('update', $user);

        $user->update($request->validated());

        return new UserResource($user);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \App\Http\Resources\UserResource
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);

        $user->delete();

        return new UserResource($user);

    }
}

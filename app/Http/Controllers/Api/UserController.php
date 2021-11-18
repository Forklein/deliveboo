<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Models\Plate;
use App\Models\Type;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->query('types')) {
            $types_filtered = explode(" ", $request->query('types'));
            $users = Type::with('users')->whereIn('name', $types_filtered)->get();
            return response()->json([
                "message" => "Success",
                "types" => $users
            ], 200);
        }

        $users = User::with('types')->get();
        return response()->json([
            "message" => "Success",
            "users" => $users
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $plates = Plate::where('user_id', $user->id)->where('visibility', 1)->get();
        return response()->json([
            'status' => 'success',
            'restaurant_name' => $user->restaurant_name,
            'total' => count($plates),
            'user' => compact('plates')
        ], 200);
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

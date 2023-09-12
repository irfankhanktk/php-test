<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follower;
use App\Models\User;

class FollowerController extends Controller
{
    //
    public function follow($user_id, $follower_id)
    {
        $follower = Follower::where('user_id', $user_id)->where('follower_id', $follower_id)->first();
        // dd($follower);
        if ($follower) {
            $follower->delete();
            return response()->json(["message" => 'deleted successfully'], 200);
        } else {

            Follower::create([
                "user_id" => $user_id,
                "follower_id" => $follower_id,
            ]);
            return response()->json(["message" => 'followed successfully'], 200);
        }
    }
    public function getFollowers($user_id)
    {
        $query = User::where('id', $user_id)->get();

        foreach ($query as $q) {
            $q->followers;
        }
        return $query;
    }
}
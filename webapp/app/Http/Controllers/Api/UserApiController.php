<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index(): JsonResponse
    {
        $users = User::all();
        $formattedUsers = $users->map(function ($user) {
            return [
                'user' => $user,
                'links' => $user->getLinks(),
            ];
        });

        return response()->json([
            'data' => $formattedUsers,
        ]);
    }

    public function show($id): JsonResponse
    {
        try {
            $user = User::findOrFail($id);

            return response()->json([
                'user' => $user,
                'links' => $user->getLinks(),
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return response()->json([
                'error' => [
                    'message' => 'User not found',
                ],
                'links' => [
                    'user_lists' => '/users',
                ]
            ], 404);
        }
    }

    public function update(Request $request, $id): JsonResponse
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        return response()->json([
            'message' => 'User updated!',
            'user' => $user,
            'links' => $user->getLinks(),
        ]);
    }


    public function destroy($id): JsonResponse
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'message' => 'User deleted!',
        ]);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ItemApiController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        // Retrieve items (all or associated with the specified user)
        $userId = $request->input('user_id');
        $itemsQuery = $userId ? Item::where('user_id', $userId) : Item::query();
        $items = $itemsQuery->get();

        // Format and return the response
        $formattedItems = $items->map(function ($item) {
            return $this->allItem($item);
        });

        return response()->json([
            'data' => $formattedItems,
        ]);
    }

    public function show($id): JsonResponse
    {
        try {
            $item = Item::findOrFail($id);

            return response()->json([
                'data' => $this->detailItem($item),
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            return response()->json([
                'error' => [
                    'message' => 'Item not found',
                ],
                'links' => [
                    'item_lists' => '/items',
                ]
            ], 404);
        }
    }

    private function allItem($item): array
    {
        $userLink = $this->getUserLink($item->user_id);

        return [
            'id' => $item->id,
            'name' => $item->name,
            'date' => $item->date,
            'links' => [
                'self' => [
                    'href' => "/api/items/{$item->id}",
                    'method' => 'GET',
                    'type' => 'application/json',
                ],
                'update' => 'Not Allowed',
                'delete' => 'Not Allowed',
                'create' => 'Not Allowed',
                'user' => $userLink,
            ],
        ];
    }

    private function detailItem($item): array
    {
        $userLink = $this->getUserLink($item->user_id);

        return [
            'id' => $item->id,
            'name' => $item->name,
            'date' => $item->date,
            'category' => $item->category,
            'location' => $item->location,
            'more_information' => $item->more_information,
            'claimed' => $item->is_claimed ? 'Yes' : 'No',
            'links' => [
                'self' => [
                    'href' => "/api/items/{$item->id}",
                    'method' => 'GET',
                    'type' => 'application/json',
                ],
                'update' => 'Not Allowed',
                'delete' => 'Not Allowed',
                'create' => 'Not Allowed',
                'user' => $userLink,
            ],
        ];
    }

    private function getUserLink($userId): array
    {
        if (Route::has('users.show')) {
            $userUri = route('users.show', ['user' => $userId]);

            return [
                'href' => $userUri,
                'method' => 'GET',
                'type' => 'application/json',
                'description' => 'Get the user associated with this item',
            ];
        }

        return [];
    }

    public function userItems(Request $request, $userId): JsonResponse
    {
        $items = Item::where('user_id', $userId)->get();

        $formattedItems = $items->map(function ($item) {
            return $this->allItem($item);
        });

        return response()->json([
            'data' => $formattedItems,
        ]);
    }
}

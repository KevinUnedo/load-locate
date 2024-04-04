<?php

namespace App\Http\Controllers;

use App\Exports\ExportCurrentWeekItems;
use App\Exports\ExportItem;
use App\Exports\ExportLostItem;
use App\Exports\ExportThisMonthItem;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class ItemController extends Controller
{
    public function createItem(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'date' => 'required|date',
            'category' => 'required|string',
            'location' => 'required|string',
            'more_information' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
            'information' => 'required|in:false,true',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $imagePath = str_replace('public/', '', $imagePath); // Remove 'public/' from the path
        } else {
            $imagePath = null; // No image provided
        }

        // Create a new item
        $item = Item::create([
            'user_id' => auth()->user()->id, // Assuming you are using authentication
            'name' => $request->name,
            'date' => $request->date,
            'category' => $request->category,
            'location' => $request->location,
            'more_information' => $request->more_information,
            'image' => $imagePath,
            'information' => $request->information === 'true', // Set to true for found, false for lost
        ]);

        return redirect()->back()->with('success', 'Item created successfully');
    }

    public function index()
    {
        $items = Item::latest();

        if (request('search')) {
            $items->where('name', 'like', '%' . request('search') . '%');
        }

        return view('recentpost', [
            "title" => "Recent Post",
            "items" => $items->get(),
            "users" => User::all()
        ]);
    }

    function export_excel()
    {
        return Excel::download(new ExportItem, 'items.xlsx');
    }

    public function downloadThisWeekItems()
    {
        return Excel::download(new ExportCurrentWeekItems, 'This Week Items.xlsx');
    }

    public function downloadThisMonthItems()
    {
        return Excel::download(new ExportThisMonthItem, 'This Month Item.xlsx');
    }

    public function show(Item $detail)
    {
        $item = Item::find($detail->id);
        $user = User::where('id', $item->user_id)->first();

        return view('detail', [
            "title" => "Item Detail",
            "items" => $item,
            "user" => $user,
        ]);
    }
}

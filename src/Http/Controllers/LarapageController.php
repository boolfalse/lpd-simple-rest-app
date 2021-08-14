<?php

namespace Boolfalse\Larapage\Http\Controllers;

use App\Http\Controllers\Controller;
use Boolfalse\Larapage\Models\Item;
use Illuminate\Http\Request;

class LarapageController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('larapage::index', [
            'items' => $items,
        ]);
    }

    public function add()
    {
        return view('larapage::create');
    }

    public function create(Request $request)
    {
        Item::create([
            'field' => $request->get('field'),
        ]);

        return redirect()->route('larapage.index');
    }

    public function edit(int $item_id)
    {
        $item = Item::find($item_id);
        if ($item) {
            return view('larapage::edit', [
                'item' => $item,
            ]);
        }

        return redirect()->route('larapage.index');
    }

    public function update(Request $request)
    {
        $item = Item::find($request->get('item_id'));
        if ($item) {
            $item->update([
                'field' => $request->get('field'),
            ]);
        }

        return redirect()->route('larapage.index');
    }
}

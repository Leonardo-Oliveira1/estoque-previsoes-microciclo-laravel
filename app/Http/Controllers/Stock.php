<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\ItemStock;

use App\Http\Controllers\Items\Category;
use App\Http\Controllers\Items\ContainersTypes;
use App\Http\Controllers\Items\ItemController;

use App\Http\Controllers\historyController;

class Stock extends Controller
{
    public function index()
    {
        $item = new ItemController;
        $categories = new Category;
        $containers = new ContainersTypes;

        return view('stock', [
            'items' => $item->showItems(),
            'containers' => $containers->showContainers(),
            'categories' => $categories->showCategories(),
            'stocks' => $this->Item()
        ]);
    }

    public function indexEdit($name)
    {
        return view('editLayouts.stock', [
            'items' => $this->selectItemByName($name),
        ]);
    }

    public function editStock($id)
    {
        return view('editLayouts.stockOff', [
            'item' => $this->selectItemById($id),
        ]);
    }

    public function Item()
    {
        for ($i = 0; $i < count($this->itemName()); $i++) {
            $item[] = array(
                'name' => $this->itemName()[$i]->name,
                'total_quantity' => $this->totalStock($this->itemName()[$i]->name),
                'next_expiration_date' => $this->nextExpirationDate($this->itemName()[$i]->name),
                'last_activity_by' => Auth::user()->name,
                'updated_at' => $this->lastUpdate()
            );
        }

        if (count($this->itemName()) != 0) {
            return $item;
        }
    }

    public function itemName()
    {
        $stocks = ItemStock::select('name')->distinct()->get();

        return $stocks;
    }

    public function selectItemByName($name)
    {
        $stocks = ItemStock::orderBy('expiration_date', 'ASC')->select()->whereRaw("name = '$name' && quantity > 0")->get();

        return $stocks;
    }

    public function selectItemById($id)
    {
        $item = ItemStock::where('id', "=", $id)->first();

        return $item;
    }

    public function totalStock($name)
    {
        $total = ItemStock::select()->whereRaw("name = '$name'")->sum("quantity");

        return $total;
    }

    public function nextExpirationDate($name)
    {
        $next_expiration_date = ItemStock::orderBy('expiration_date', 'ASC')->select()->whereRaw("name = '$name' && expiration_date >= CURDATE()")->first();

        return $next_expiration_date->expiration_date;
    }

    public function lastUpdate()
    {
        $last_update = ItemStock::orderBy('updated_at', 'ASC')->first();

        return $last_update->updated_at;
    }


    public function getData(Request $request)
    {
        $name = $request->input('item_name');
        $expiration_date = $request->input('expiration_date');
        $quantity = $request->input('quantity');
        $last_activity_by = Auth::user()->name;

        $data = (object) array(
            'item' => (object) array(
                'name' => $name,
                'expiration_date' => $expiration_date,
                'quantity' => $quantity,
                'last_activity_by' => $last_activity_by
            )
        );

        return $data;
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);

        $stock = new ItemStock;
        $history = new historyController;

        $stock->name = $data->item->name;
        $stock->quantity = $data->item->quantity;
        $stock->expiration_date = $data->item->expiration_date;
        $stock->last_activity_by = $data->item->last_activity_by;

        $stock->save();
        $history->saveStockAddHistory(Auth::user()->name, $stock->quantity, $stock->name);

        return redirect('/');
    }

    public function edit(Request $request, $id)
    {
        $data = $this->getData($request);

        $item = ItemStock::find($id);

        $item->name = $data->item->name;
        $item->category = $data->item->category;

        $item->save();

        return redirect('/itens')
            ->with('success', 'Item alterado com sucesso!');
    }
}
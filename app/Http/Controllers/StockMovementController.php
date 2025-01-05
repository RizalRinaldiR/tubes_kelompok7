<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockMovement;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class StockMovementController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        $stockMovements = StockMovement::where('branch_id',$user->branch_id)->get();

        return view('stock-movement.index', compact('stockMovements'));
    }

    public function create()
    {
        $user = auth()->user(); 
        $branchId = $user->branch_id; 
        $products = Product::where('branch_id', $branchId)->get(); 
    
        return view('stock-movement.edit', compact('user', 'branchId', 'products'));
    }    

    public function store(Request $request)
{
    $validated = $request->validate([
        'branch_id' => 'required|exists:branches,id',
        'product_id' => 'required|exists:products,id',
        'type' => 'required|in:in,out',
        'quantity' => 'required|integer|min:1',
    ]);

    $validated['user_id'] = auth()->id(); // 

    $product = Product::findOrFail($validated['product_id']);

    if ($validated['type'] === 'in') {
        $product->stock += $validated['quantity'];
    } else if ($validated['type'] === 'out') {
        if ($product->stock - $validated['quantity'] < $product->stock_min) {
            return redirect()->back()->withErrors([
                'quantity' => 'Stok tidak boleh kurang dari stok minimum.',
            ]);
        }
        $product->stock -= $validated['quantity'];
    }

    $product->save();

    StockMovement::create($validated);
    $notification = array(
        'message' => 'Stock berhasil ditambahkan.',
        'alert-type' => 'success'
    );
    

    return redirect()->route('stock-movements.index')->with($notification);
    }

    public function export()
    {
        $stockMovements = StockMovement::with('product')->get();

        $pdf = PDF::loadView('stock-movement.pdf', compact('stockMovements'));
        return $pdf->stream('Stock.pdf');
    }
    
}

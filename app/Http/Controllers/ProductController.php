<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $branchId = $request->input('branch_id');
    
        if ($branchId) {
            $products = Product::where('branch_id', $branchId)->get();
        } else {
            $products = Product::all(); 
        }
    
        $branch = Branch::all(); 
    
        return view('products.index', compact('branch','products'));    
}
    
public function show(Request $request)
{
    $user = auth()->user();
    $products = Product::where('branch_id', $user->branch_id)->paginate(5);
    return view('products.indexother', compact('products'));
}


    public function create()
    {
        $branch = Branch::all(); 
        return view('products.create', compact('branch'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'branch_id' => 'required|exists:branches,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'stock_min' => 'required|integer',
        ]);

        $product = Product::create($validated);
        $notification = array(
            'message' => 'Produk berhasil ditambahkan.',
            'alert-type' => 'success'
        );
        return redirect()->route('warehouse.products.indexother')->with($notification);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        $notification = array(
            'message' => 'Produk berhasil dihapus.',
            'alert-type' => 'success'
        );

        return redirect()->route('warehouse.products.indexother')->with(  $notification);
    }
 
    public function sellProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
    
        $request->validate([
            'quantity' => 'required|integer|min:1|max:' . $product->stock,
        ]);
    
        $quantity = $request->input('quantity');
        $totalPrice = $quantity * $product->price;
    
        // Kurangi stok produk
        $product->stock -= $quantity;
        $product->save();
    
        // Buat transaksi
        \DB::table('transactions')->insert([
            'branch_id' => auth()->user()->branch_id, 
            'user_id' => auth()->id(),
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' => $product->price,
            'subtotal' => $totalPrice,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // Kirim notifikasi
        $notification = array(
            'message' => "Produk berhasil terjual! Total harga: Rp. " . number_format($totalPrice, 0, ',', '.') . ",000",
            'alert-type' => 'success',
        );
    
        return redirect()->route('cashier.products.index')->with($notification);
    }
    
public function soldPage($id)
{
    $product = Product::findOrFail($id); // Pastikan produk ditemukan
    return view('products.sold', compact('product'));
}

}

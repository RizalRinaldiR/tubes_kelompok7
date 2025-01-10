<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Product;
use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $branch_id = $request->input('branch_id');
        $branch = Branch::all();

        $transactions = [];
        if ($branch_id) {
            $transactions = Transaction::where('branch_id', $branch_id)
                ->with(['product', 'user']) // Eager load relasi product dan user (kasir)
                ->get();
        }

        return view('transactions.index', compact('branch', 'transactions'));
    }

    public function show(Request $request)
    {
        $user = auth()->user();
        $transactions = Transaction::where('branch_id', $user->branch_id)
            ->with(['product', 'user']) // Eager load relasi product dan user (kasir)
            ->paginate(5);

        return view('transactions.indexother', compact('transactions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'branch_id' => 'required|exists:branch,id',
            'user_id' => 'required|exists:users,id',
            'total' => 'required|numeric',
            'details' => 'required|array',
            'details.*.product_id' => 'required|exists:products,id',
            'details.*.quantity' => 'required|integer',
            'details.*.price' => 'required|numeric',
        ]);

        $transaction = Transaction::create([
            'branch_id' => $validated['branch_id'],
            'user_id' => $validated['user_id'],
            'total' => $validated['total'],
        ]);

        foreach ($validated['details'] as $detail) {
            Transaction::create([
                'transaction_id' => $transaction->id,
                'product_id' => $detail['product_id'],
                'quantity' => $detail['quantity'],
                'price' => $detail['price'],
                'subtotal' => $detail['quantity'] * $detail['price'],
            ]);

            $product = Product::find($detail['product_id']);
            $product->decrement('stock', $detail['quantity']);
        }

        return response()->json($transaction, 201);
    }
    
    public function export(Request $request)
    {
        
        $user = auth()->user();
        $transactions = Transaction::where('branch_id', $user->branch_id)->with('product', 'user')->get();

        $pdf = Pdf::loadView('transactions.pdf', compact('transactions'))
            ->setPaper('a4', 'landscape');

        return $pdf->stream('Transaksi.pdf');
    }

        public function report()
    {
        $transactions = Transaction::with(['product', 'branch', 'user'])->get();

        return view('transactions.report', compact('transactions'));
    }
}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Laporan Transaksi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-700 rounded-lg">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-2 text-center text-sm font-medium text-gray-700 dark:text-gray-300 border-b border-gray-200 dark:border-gray-600">
                                        No
                                    </th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-gray-300 border-b border-gray-200 dark:border-gray-600">
                                        Nama Kasir
                                    </th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-gray-300 border-b border-gray-200 dark:border-gray-600">
                                        Nama Produk
                                    </th>
                                    <th class="px-4 py-2 text-center text-sm font-medium text-gray-700 dark:text-gray-300 border-b border-gray-200 dark:border-gray-600">
                                        Jumlah
                                    </th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-gray-300 border-b border-gray-200 dark:border-gray-600">
                                        Harga
                                    </th>
                                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 dark:text-gray-300 border-b border-gray-200 dark:border-gray-600">
                                        SubTotal
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($transactions as $index => $transaction)
                                    <tr class="{{ $loop->even ? 'bg-gray-50 dark:bg-gray-700' : '' }}">
                                        <td class="px-4 py-2 text-center text-sm text-gray-900 dark:text-gray-100">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="px-4 py-2 text-left text-sm text-gray-900 dark:text-gray-100">
                                            {{ $transaction->user->name }}
                                        </td>
                                        <td class="px-4 py-2 text-left text-sm text-gray-900 dark:text-gray-100">
                                            {{ $transaction->product->name }}
                                        </td>
                                        <td class="px-4 py-2 text-center text-sm text-gray-900 dark:text-gray-100">
                                            {{ $transaction->quantity }}
                                        </td>
                                        <td class="px-4 py-2 text-left text-sm text-gray-900 dark:text-gray-100">
                                            RP. {{ number_format($transaction->price * 1000, 0, ',', '.') }}
                                        </td>
                                        <td class="px-4 py-2 text-left text-sm text-gray-900 dark:text-gray-100">
                                            RP. {{ number_format($transaction->subtotal * 1000, 0, ',', '.') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-6">
                            <a href="{{ route('manager.products.print') }}" 
                               target="_blank" 
                               class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                Cetak Produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
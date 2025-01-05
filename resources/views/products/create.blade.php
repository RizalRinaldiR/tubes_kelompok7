<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('warehouse.products.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- branch -->
                        <div>
                            <label for="branch_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">branch</label>
                            <input 
                                type="text" 
                                id="branch_name" 
                                class="block w-full mt-1 bg-gray-100 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                value="{{ auth()->user()->branch->name }}" 
                                disabled>
                            <input type="hidden" name="branch_id" value="{{ auth()->user()->branch_id }}">
                        </div>

                        <!-- Nama Produk -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Produk</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                class="block w-full mt-1 bg-gray-50 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                required>
                        </div>

                        <!--Harga -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Harga</label>
                                <input 
                                    type="number" 
                                    id="price" 
                                    name="price" 
                                    class="block w-full mt-1 bg-gray-50 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                    required>
                            </div>
                        </div>

                        <!-- Stok dan Stok Minimal -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="stock" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Stok</label>
                                <input 
                                    type="number" 
                                    id="stock" 
                                    name="stock" 
                                    class="block w-full mt-1 bg-gray-50 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                    required>
                            </div>

                            <div>
                                <label for="stock_min" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Stok Minimal</label>
                                <input 
                                    type="number" 
                                    id="stock_min" 
                                    name="stock_min" 
                                    class="block w-full mt-1 bg-gray-50 text-black border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" 
                                    required>
                            </div>
                        </div>

                       
                        <div class="flex justify-end">
                            <x-primary-button type="submit">Simpan</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

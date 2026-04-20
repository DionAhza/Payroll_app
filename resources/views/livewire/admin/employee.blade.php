<div class="p-6">
    <h1 class="text-2xl font-semibold mb-6 text-gray-700">Halaman Pegawai</h1>

    <form class="max-w-lg space-y-4">
        <!-- User -->
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">User</label>
            <select class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-400">
                <option value="">--- Pilih User ---</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Position -->
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">Position</label>
            <select class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-400">
                <option value="">--- Pilih Position ---</option>
                @foreach ($positions as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Gaji -->
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">Gaji</label>
            <input 
                type="number" 
                placeholder="Masukkan gaji"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-400"
            >
        </div>

        <!-- Button -->
        <div>
            <button 
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded"
            >
                Simpan
            </button>
        </div>
    </form>
</div>
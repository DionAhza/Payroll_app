<div class="p-6">
    <h1 class="text-2xl font-semibold mb-6 text-gray-700">Halaman Pengguna</h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <ul>
                <li class="text-red-500">{{ $error }}</li>
            </ul>
        @endforeach 
    @endif
    @if (session('message'))
        <div class="text-green-500 font-bold">{{ session('message') }}</div>
    @endif
    <form class="max-w-lg space-y-4" wire:submit.prevent='store'>
        <!-- User -->
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">name</label>
           <input type="text" wire:model='name' class="w-full border border-gray-500 ">
        </div>

        <!-- Position -->
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">Email</label>
           <input type="email" wire:model='email' class="w-full border border-gray-500">
        </div>

        <!-- password -->
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">Password</label>
            <input 
               wire:model='password'
                type="password" 
                placeholder="Masukkan password"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-400"
            >
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-600 mb-1">Role</label>
            <select wire:model='role' class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-400">
                <option value="">--- Pilih role ---</option>
                    <option value="admin">
                        Admin
                    </option>
                    <option value="user">
                        User
                    </option>
            </select>
        </div>
        <!-- Button -->
        <div>
            @if ($editCheck == false)
            <button 
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded"
            >
                Simpan
            </button>
            @endif
        </div>
    </form>
      @if ($editCheck == true)
            <button 
               wire:click='update({{ $idEdit }})'
                class="bg-purple-500 hover:bg-purple-600 text-white px-5 py-2 rounded"
            >
                Update
            </button>
            @endif
            
            <input type="text" class="form-control w-30 px-4 py-2" placeholder="Input your keyword...." wire:model.live='keyword'>

    <table class="min-w-full divide-y-2 divide-gray-200">
    <thead class="ltr:text-left rtl:text-right">
      <tr class="*:font-medium *:text-gray-900">
        <th class="px-3 py-2 whitespace-nowrap">#</th>
        <th class="px-3 py-2 whitespace-nowrap">Username</th>
        <th class="px-3 py-2 whitespace-nowrap">Email</th>
        <th class="px-3 py-2 whitespace-nowrap">Password</th>
        <th class="px-3 py-2 whitespace-nowrap">Role</th>
        <th class="px-3 py-2 whitespace-nowrap">Action</th>
      </tr>
    </thead>

    <tbody class="divide-y divide-gray-200">
        @foreach ($users as $item)
      <tr class="*:text-gray-900 *:first:font-medium">
        <td class="px-3 py-2 whitespace-nowrap">{{ $loop->iteration }}</td>
        <td class="px-3 py-2 whitespace-nowrap">{{ $item->name }}</td>
        <td class="px-3 py-2 whitespace-nowrap">{{  $item->email }}</td>
        <td class="px-3 py-2 whitespace-nowrap">{{  $item->password }}</td>
        <td class="px-3 py-2 whitespace-nowrap">{{  $item->role }}</td>
        <td class="px-3 py-2 whitespace-nowrap">
          <button class="bg-red-500 px-4 py-2 text-white" wire:click='destroy({{ $item->id }})'>Hapus</button>
          @if ($editCheck == false)   
          <button wire:click='edit({{ $item->id }})' class="bg-blue-500 px-4 py-2 text-white">Edit</button>
          @endif
          @if ($editCheck == true)
              <button class="bg-blue-500 px-4 py-2 text-white" wire:click='clear()'>
                clear
              </button>
          @endif
        </td>
      </tr>
       @endforeach
    </tbody>
  </table>
</div>
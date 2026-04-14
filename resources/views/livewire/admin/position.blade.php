
<div>

    <h1>Welcome to position page</h1>
    <form wire:submit.prevent='store'>
  <div class="space-y-12">
        <input type="text" wire:model='name' class=" form-control w-full px-3 h-12 border rounded" placeholder="Silahkan isi nama posisi.....">
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm/6 font-semibold text-black">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" 
   >Save</button>
  </div>
</form>

<hr class="w-full text-black ">
    
        @if ($errors->any())
            <div class="text-red-500">
                @foreach ($errors->all() as $item)
                    {{ $item }}
                @endforeach
            </div>
        @endif  
        
        @if (session('message'))
            <div class="text-green-500">
                {{  session('message') }}
            </div>
        @endif

<div class="overflow-x-auto">
  <table class="min-w-full divide-y-2 divide-gray-200">
    <thead class="ltr:text-left rtl:text-right">
      <tr class="*:font-medium *:text-gray-900">
        <th class="px-3 py-2 whitespace-nowrap">#</th>
        <th class="px-3 py-2 whitespace-nowrap">Name</th>
        <th class="px-3 py-2 whitespace-nowrap">Action</th>
      </tr>
    </thead>

    <tbody class="divide-y divide-gray-200">
        @foreach ($positions as $item)
      <tr class="*:text-gray-900 *:first:font-medium">
        <td class="px-3 py-2 whitespace-nowrap">{{ $loop->iteration }}</td>
        <td class="px-3 py-2 whitespace-nowrap">{{ $item->name }}</td>
        <td class="px-3 py-2 whitespace-nowrap"></td>
      </tr>
       @endforeach
    </tbody>
  </table>
</div>


</div>



<div>

    <h1>Welcome to position page</h1>
    <form wire:submit.prevent='store'>
  <div class="space-y-12">
        <input type="text" wire:model='name' class=" form-control w-full px-3 h-12 border rounded" placeholder="Silahkan isi nama posisi.....">
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    @if ($editCheck == false)
        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" 
   >Save</button>
    @endif
    
    
  </div>
</form> 
@if ($editCheck == true)
         <button wire:click='update({{ $idEdit }})'  class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" 
    >update</button>
    @endif

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

  <input type="text" class="form-control w-30 px-4 py-2" placeholder="Input your keyword...." wire:model.live='keyword'>

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


</div>


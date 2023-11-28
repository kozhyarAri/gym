<div>
    <div class="justify-between flex">
        <a class="py-2 px-4 rounded-lg bg-white hover:bg-slate-100 transition-all" href="{{route('admin.plans')}}">Back</a>
        <div wire:click='delete' class="py-2 hover:cursor-pointer px-4 rounded-lg bg-red-600 text-white hover:bg-red-800 transition-all">Delete Plan</div>
    </div>
    <form wire:submit.prevent='update' action="" method="POST" class="mt-5">
        @csrf
        @if (session()->has('msg'))
            <p class="text-green-700 p-3 text-2xl">
                {{session()->get('msg')}}
            </p>
        @endif
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="plan_name" class="block mb-2 text-sm font-medium text-gray-900">Plan Name</label>
                <input wire:model='form.plan_name' type="text" id="plan_name" name="plan_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('form.plan_name')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div>
                <label for="duration" class="block mb-2 text-sm font-medium text-gray-900">Duration</label>
                <input wire:model='form.duration' type="number" id="duration" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('form.duration')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div>
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                <input wire:model='form.price' type="number" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('form.price')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>  
        </div>
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Update</button>
    </form>
    
</div>

<div>
    <div class="justify-between flex">
        <a class="py-2 px-4 rounded-lg bg-white hover:bg-slate-100 transition-all" href="{{route('admin.members')}}">Back</a>
        <div wire:click='delete' class="py-2 hover:cursor-pointer px-4 rounded-lg bg-red-600 text-white hover:bg-red-800 transition-all">Delete Member</div>
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
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                <input wire:model='formRegister.first_name' type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('formRegister.first_name')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                <input wire:model='formRegister.last_name' type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('formRegister.last_name')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input wire:model='formRegister.email' type="email" id="email" name="email" value="{{old('email')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Example@gmail.com">
                @error('formRegister.email')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                <input wire:model='formRegister.address' type="text" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('formRegister.address')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>  
            <div>
                <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                <input wire:model='formRegister.phone_number' type="number" id="phone_number" name="phone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="07700000000" >
                @error('formRegister.phone_number')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select a Role</label>
                <select wire:model='formRegister.gender' id="countries" name="role"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="male" {{$formRegister['gender']=='male'?'selected':''}}>male</option>
                    <option value="female" {{$formRegister['gender']=='female'?'selected':''}}>female</option>
                </select>
                @error('formRegister.gender')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            
        </div>
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Update</button>
    </form>
    
</div>
  
<div>
    <a class="py-2 px-4 rounded-lg bg-white hover:bg-slate-100 transition-all" href="{{route('admin.users')}}">Back</a>
    <form wire:submit.prevent='submit' action="" method="POST" class="mt-5">
        @csrf
        @if (session()->has('msg'))
            <p class="text-green-700 p-3 text-2xl">
                {{session()->get('msg')}}
            </p>
        @endif
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                <input wire:model='formRegister.name' type="text" id="name" name="name" value="{{old('name')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="kozhyar">
                @error('formRegister.name')
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
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input wire:model='formRegister.password' type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="*****" >
                @error('formRegister.password')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>  
            <div>
                <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">Password Confirmation</label>
                <input wire:model='formRegister.password_confirmation' type="password" id="password_confirmation" name="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="*****" >
                @error('formRegister.password_confirmation')
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
                <select wire:model='formRegister.role' id="countries" name="role"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">Select Role For User</option>
                    <option value="0">Noraml Admin</option>
                    <option value="1">Super Admin</option>
                </select>
                @error('formRegister.role')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
        </div>
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Add</button>
    </form>
    
</div>

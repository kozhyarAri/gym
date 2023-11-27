<div>
    <div class="flex border-4 h-screen justify-center items-center bg-stone-200 bg-gradient-to-tr">

        <form wire:submit.prevent='submit' class="w-11/12 bg-white md:w-2/5 mx-auto my-auto shadow-2xl p-5 rounded-xl">
            <div class="w-20 m-auto my-5">
                <img src="https://www.svgrepo.com/show/277609/training-gym.svg" alt="">
            </div>
            @if (session()->has('invalid'))
                <div class="p-2 my-2 text-center text-white bg-red-500 rounded-lg">
                    {{ session()->get('invalid') }}
                </div>
            @endif
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ئیمەیڵ</label>
                <input dir="ltr" wire:model='email' type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="example@gmail.com">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">تێپەڕەوشە</label>
                <input dir="ltr" wire:model='password' type="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
            <div class="flex items-start mb-5">
                {{-- <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value=""
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                        required>
                </div>
                <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                    me</label> --}}
            </div>
            <button wire:click='submit'
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">چوونەژورەوە</button>
        </form>
    </div>
</div>

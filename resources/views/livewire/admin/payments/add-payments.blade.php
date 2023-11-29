<div>
    <a class="py-2 px-4 rounded-lg bg-white hover:bg-slate-100 transition-all" href="{{route('admin.payments')}}">Back</a>
    <form wire:submit.prevent='submit' action="" method="POST" class="mt-5">
        @csrf
        @if (session()->has('msg'))
            <p class="text-green-700 p-3 text-2xl">
                {{session()->get('msg')}}
            </p>
        @endif
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select Member Email</label>
                <select wire:model='form.member_id' id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">Select Member Email</option>
                    @foreach ($members as $member)
                    <option value="{{ $member->id }}">{{ $member->email }}</option>
                    @endforeach
                </select>
                @error('form.member_id')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>
            <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select a Plan</label>
                <select wire:model='form.plan_id' id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">Select Member Plan</option>
                    @foreach ($plans as $plan)
                    <option value="{{ $plan->id }}">{{ $plan->plan_name }} {{ number_format($plan->price, 0, '.', ',') }} د.ع</option>
                    @endforeach
                </select>
                @error('form.plan_id')
                <p class="text-green-700 mt-1">
                    {{$message}}
                </p>
                @enderror
            </div>  
        </div>
        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Add</button>
    </form>
    
</div>

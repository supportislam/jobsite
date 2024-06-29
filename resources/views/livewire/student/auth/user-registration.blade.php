<div>
    <main class="flex justify-center items-center px-4 py-8 bg-white">
        <section class="w-full max-w-2xl">
            <h1 class="text-xl font-semibold text-center text-black mb-8">User Registration</h1>
            <form wire:submit.prevent="register" class="space-y-6">
                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="userId" class="sm:w-1/3 text-sm text-right mr-4 mb-2 sm:mb-0">User ID</label>
                    <input id="userId" type="text" wire:model="userId" readonly class="flex-grow p-2 border border-gray-300 rounded bg-gray-100" aria-label="User ID">
                </div>
                @error('userId') <span class="text-red-500">{{ $message }}</span> @enderror

                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="name" class="sm:w-1/3 text-sm text-right mr-4 mb-2 sm:mb-0">Name (English)</label>
                    <input id="name" type="text" wire:model="name" class="flex-grow p-2 border border-gray-300 rounded" aria-label="Name">
                </div>
                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror

                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="email" class="sm:w-1/3 text-sm text-right mr-4 mb-2 sm:mb-0">E-mail Address</label>
                    <input id="email" type="email" wire:model="email" readonly class="flex-grow p-2 border border-gray-300 rounded bg-gray-100" aria-label="E-mail Address">
                </div>
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror

                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="password" class="sm:w-1/3 text-sm text-right mr-4 mb-2 sm:mb-0">Password</label>
                    <input id="password" type="password" wire:model="password" class="flex-grow p-2 border border-gray-300 rounded" aria-label="Password">
                </div>
                @error('password') <span class="text-red-500">{{ $message }}</span> @enderror

                <div class="flex flex-col sm:flex-row sm:items-center">
                    <label for="password_confirmation" class="sm:w-1/3 text-sm text-right mr-4 mb-2 sm:mb-0">Password (for confirmation)</label>
                    <input id="password_confirmation" type="password" wire:model="password_confirmation" class="flex-grow p-2 border border-gray-300 rounded" aria-label="Confirm Password">
                </div>

                <div class="flex flex-col items-center mt-8">
                    <button type="button" class="px-4 py-2 text-sm border border-gray-300 rounded">Terms of Use</button>
                    <div class="flex items-center mt-4">
                        <input type="checkbox" id="agreeTerms" wire:model="agreeTerms" class="mr-2">
                        <label for="agreeTerms" class="text-sm">I agree to the Terms of Use.</label>
                    </div>
                    @error('agreeTerms') <span class="text-red-500">{{ $message }}</span> @enderror

                    <div class="flex flex-col sm:flex-row justify-between w-full mt-8">
                        <button type="submit" class="w-full sm:w-auto px-6 py-2 mb-4 sm:mb-0 text-sm border border-gray-300 rounded">Member Registration</button>
                        <button type="button" onclick="window.location='{{ route('new-member-registration') }}'" class="w-full sm:w-auto px-6 py-2 text-sm border border-gray-300 rounded">Cancel</button>
                    </div>
                </div>
            </form>
            <div class="flex justify-center mt-12">
                <a href="{{ url('/') }}" class="px-6 py-2 text-sm border border-gray-300 rounded">Return to TOP</a>
            </div>
        </section>
    </main>
</div>

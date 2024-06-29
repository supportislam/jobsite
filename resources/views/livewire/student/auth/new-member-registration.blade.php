<div>
    <main class="flex flex-col items-center justify-center">
        <section class="flex flex-col items-center px-10 py-10 mt-10 bg-white rounded-lg border-2 border-black max-w-md w-full md:px-4 md:py-6 md:w-full">
            <h2 class="text-lg font-bold mb-4">New Member Registration</h2>
            <form wire:submit.prevent="sendVerificationEmail" class="w-full">
                <label for="email" class="block mt-4 text-sm text-black">
                    Email Address
                </label>
                <input
                    type="email"
                    id="email"
                    wire:model="email"
                    class="block w-full px-4 py-2 mt-1 bg-white border border-black rounded-md focus:outline-none focus:ring focus:border-blue-300"
                />
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror

                <label for="confirm-email" class="block mt-4 text-sm text-black">
                    Confirm Email Address
                </label>
                <input
                    type="email"
                    id="confirm-email"
                    wire:model="confirmEmail"
                    class="block w-full px-4 py-2 mt-1 bg-white border border-black rounded-md focus:outline-none focus:ring focus:border-blue-300"
                />
                @error('confirmEmail') <span class="text-red-500">{{ $message }}</span> @enderror

                <p class="mt-4 text-sm text-gray-600">
                    A registration email will be sent to the provided email address.<br />
                    Please click the URL in the email to complete the registration process.
                </p>
                <div class="flex justify-center">
                    <button
                        type="submit"
                        class="inline-block px-6 py-3 mt-6 text-sm font-semibold text-black border-2 border-black rounded-md transition-colors duration-300"
                    >
                        New Member Registration
                    </button>
                </div>
            </form>
        </section>
        <button
            onclick="window.location='{{ url('/') }}'"
            class="inline-block px-6 py-3 mt-6 text-sm font-semibold text-black border-2 border-black rounded-md transition-colors duration-300"
        >
            Return to TOP page
        </button>
    </main>
</div>

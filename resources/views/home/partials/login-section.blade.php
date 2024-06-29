<section class="bg-white rounded-lg shadow-md border border-black border-solid p-6 max-w-md w-full">
    <h2 class="text-lg font-bold mb-4">New Member Registration / Login</h2>
    <p class="text-gray-600 mb-6">We support everything from specific skill job searches, applications, and
        employment support.</p>
    <p class="text-gray-600 mb-6">If you have not yet registered as a member, register as a new member
        now!</p>
    <div class="flex flex-col gap-4">
        <a
                href="{{ route('new-member-registration') }}"
            class="bg-red-600 text-white font-bold py-2 px-4 rounded-md hover:bg-red-700 transition-colors duration-300"
        >
            New Member Registration
        </a>
        <a
            href="{{ route('login') }}"
            class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600 transition-colors duration-300"
        >
            Login
        </a>
        <span class="text-center"><a class="text-blue-600"
{{--                                                         href="{{ route('new-company-registration') }}"--}}
                                >Click here</a> to login to your company account or register as a new member.</span>
    </div>
</section>

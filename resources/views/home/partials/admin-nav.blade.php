<div x-data="{ isOpen: false }">
    <!-- Admin Navigation Menu -->
    <nav class="rounded-lg w-full ">
        <div class="w-full mx-auto">
            <button @click="isOpen = !isOpen" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="flex flex-col md:flex-row md:items-center bg-white p-2">
                <div class="w-full md:block md:w-auto py-2" :class="{'hidden': !isOpen}" id="navbar-multi-level">
                    <ul x-cloak
                        class="flex flex-col md:flex-row justify-between font-large p-4 md:p-0 mt-4 border rounded-lg bg-gray-50 md:mt-0 md:border-0 md:bg-white">
                        <li class="border-l border-solid border-black  hidden md:block px-1"></li>
                        <li class="relative group  px-2" x-data="{ open: false }">
                            <a href="#" @click="open = !open"
                               class="flex items-center justify-between py-1 px-2 text-sm text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                                Main menu
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </a>
                            <ul x-show="open" @click.away="open = false"
                                class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 md:absolute md:left-0 md:mt-2">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">List of students with job
                                        offers</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">List of Employment Procedure
                                        Applications</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Message</a></li>
                            </ul>
                        </li>

                        <li class="border-l border-solid border-black  hidden md:block px-1"></li>
                        <li class="relative group  px-2" x-data="{ open: false }">
                            <a href="#" @click="open = !open"
                               class="flex items-center justify-between py-1 px-2 text-sm text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                                Registered User Management
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </a>
                            <ul x-show="open" @click.away="open = false"
                                class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 md:absolute md:left-0 md:mt-2">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">List of Registered
                                        Students</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Registered Company Users
                                        List</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">List of registered
                                        companies</a></li>
                            </ul>
                        </li>

                        <li class="border-l border-solid border-black  hidden md:block px-1"></li>
                        <li class="relative group  px-2" x-data="{ open: false }">
                            <a href="#" @click="open = !open"
                               class="flex items-center justify-between py-1 px-2 text-sm text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                                Japanese Language Learning Management
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </a>
                            <ul x-show="open" @click.away="open = false"
                                class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 md:absolute md:left-0 md:mt-2">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">List of applications for
                                        Japanese language study</a></li>
                            </ul>
                        </li>

                        <li class="border-l border-solid border-black  hidden md:block px-1"></li>
                        <li class="relative group  px-2" x-data="{ open: false }">
                            <a href="#" @click="open = !open"
                               class="flex items-center justify-between py-1 px-2 text-sm text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                                Job Seeker Management
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </a>
                            <ul x-show="open" @click.away="open = false"
                                class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 md:absolute md:left-0 md:mt-2">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Job Seeker List</a></li>
                            </ul>
                        </li>

                        <li class="border-l border-solid border-black  hidden md:block px-1"></li>
                        <li class="relative group  px-2" x-data="{ open: false }">
                            <a href="#" @click="open = !open"
                               class="flex items-center justify-between py-1 px-2 text-sm text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                                Managing for favors
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </a>
                            <ul x-show="open" @click.away="open = false"
                                class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 md:absolute md:left-0 md:mt-2">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Job Listings</a></li>
                            </ul>
                        </li>

                        <li class="border-l border-solid border-black  hidden md:block px-1"></li>
                        <li class="relative group  px-2" x-data="{ open: false }">
                            <a href="#" @click="open = !open"
                               class="flex items-center justify-between py-1 px-2 text-sm text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                                VR Content Management
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </a>
                            <ul x-show="open" @click.away="open = false"
                                class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 md:absolute md:left-0 md:mt-2">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">VR Content Management</a></li>
                            </ul>
                        </li>

                        <li class="border-l border-solid border-black  hidden md:block px-1"></li>
                        <li class="relative group  px-2" x-data="{ open: false }">
                            <a href="#" @click="open = !open"
                               class="flex items-center justify-between py-1 px-2 text-sm text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                                Interview Preparation Study Management
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </a>
                            <ul x-show="open" @click.away="open = false"
                                class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 md:absolute md:left-0 md:mt-2">
                                <!-- Submenu items go here -->
                            </ul>
                        </li>

                        <li class="border-l border-solid border-black  hidden md:block px-1"></li>
                        <li class="relative group  px-2" x-data="{ open: false }">
                            <a href="#" @click="open = !open"
                               class="flex items-center justify-between py-1 px-2 text-sm text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                                Interview test management
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </a>
                            <ul x-show="open" @click.away="open = false"
                                class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 md:absolute md:left-0 md:mt-2">
                                <!-- Submenu items go here -->
                            </ul>
                        </li>

                        <li class="border-l border-solid border-black  hidden md:block px-1"></li>
                        <li class="relative group  px-2" x-data="{ open: false }">
                            <a href="#" @click="open = !open"
                               class="flex items-center justify-between py-1 px-2 text-sm text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                                Setting
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </a>
                            <ul x-show="open" @click.away="open = false"
                                class="z-10 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 md:absolute md:left-0 md:mt-2">

                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">User Registration</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Company Information
                                        Registration</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="w-full text-left block px-4 py-2 hover:bg-gray-100">Logout
                                        </button>
                                    </form>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex justify-between items-center p-5">
        <div></div>
        <div class="flex items-center justify-start gap-2">
            <div><img src="{{asset('placeholder.png')}}" class="bg-gray-100 rounded-full w-[40px] h-[40px] "/></div>
            <span class="text-sm">{{ Auth::user()->name }}</span>
        </div>
    </div>
</div>

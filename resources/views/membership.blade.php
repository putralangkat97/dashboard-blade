<x-dashboard-layout>
    <x-slot name="header">
        {{ __('Membership') }}
    </x-slot>

    <div class="w-full border-b border-teal-800/10">
        <nav class="flex space-x-2">
            <a href="{{ route('membership') }}"
                class="py-4 px-1 inline-flex items-center gap-2 border-b-[2px] border-teal-800/50 font-medium text-sm text-gray-800 whitespace-nowrap hover:text-teal-700 transition-colors duration-200">
                Member List
            </a>
        </nav>
    </div>

    <div class="pt-4 pb-10 flex flex-col">
        <div class="flex flex-wrap justify-between items-center mb-4">
            <x-input class="w-full sm:w-80 mb-4 sm:mb-0 placeholder:text-gray-400" placeholder="Search here..." />
            <div class="flex space-x-3">
                <x-secondary-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm leading-4 font-medium text-gray-800 bg-white hover:bg-teal-800/10 hover:text-gray-900 focus:outline-none transition ease-in-out duration-200 rounded-full">
                            <span class="font-medium text-gray-600">Sort By</span>
                            <div class="ml-1 text-gray-600">
                                <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="p-2 space-y-2">
                            <label for="name" class="flex items-center">
                                <x-checkbox id="name" name="name" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Name') }}</span>
                            </label>
                            <label for="email" class="flex items-center">
                                <x-checkbox id="email" name="email" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Email') }}</span>
                            </label>
                            <label for="point" class="flex items-center">
                                <x-checkbox id="point" name="point" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Point') }}</span>
                            </label>
                            <label for="level" class="flex items-center">
                                <x-checkbox id="level" name="level" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Level') }}</span>
                            </label>
                        </div>
                    </x-slot>
                </x-secondary-dropdown>
                <x-secondary-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-gray-300 text-sm leading-4 font-medium text-gray-800 bg-white hover:bg-teal-800/10 hover:text-gray-900 focus:outline-none transition ease-in-out duration-200 rounded-full">
                            <span class="font-medium text-gray-600">Level</span>
                            <div class="ml-1 text-gray-600">
                                <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="p-4 space-y-2">
                            <label for="silver" class="flex items-center">
                                <x-checkbox id="silver" name="silver" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Silver') }}</span>
                            </label>
                            <label for="gold" class="flex items-center">
                                <x-checkbox id="gold" name="gold" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Gold') }}</span>
                            </label>
                            <label for="platinum" class="flex items-center">
                                <x-checkbox id="platinum" name="platinum" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Platinum') }}</span>
                            </label>
                            <label for="diamond" class="flex items-center">
                                <x-checkbox id="diamond" name="diamond" />
                                <span class="ms-2 text-sm text-gray-600">{{ __('Diamond') }}</span>
                            </label>
                        </div>
                    </x-slot>
                </x-secondary-dropdown>
            </div>
        </div>
        <div class="-my-2 -mx-4 sm:-mx-6 lg:-mx-8 overflow-x-auto">
            <div class="inline-block min-w-full py-2 aling-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-teal-800/10">
                        <thead class="bg-teal-800/10">
                            <tr>
                                <th scope="col" class="pl-3 lg:pl-0 w-10">
                                    <x-checkbox />
                                </th>
                                <th scope="col" class="py-3 pl-4 sm:pl-6 pr-3 text-left text-sm font-semibold text-gray-800">
                                    Name
                                </th>
                                <th scope="col"
                                    class="hidden lg:table-cell py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-800">
                                    Email
                                </th>
                                <th scope="col"
                                    class="hidden sm:table-cell py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-800">
                                    Points
                                </th>
                                <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-800">
                                    Level
                                </th>
                                <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-800">
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 bg-white">
                            @foreach ($members as $member)
                                <tr>
                                    <td class="pl-3 w-10">
                                        <x-checkbox />
                                    </td>
                                    <td
                                        class="whitespace-nowrap w-full max-w-0 sm:w-auto truncate py-4 pl-4 pr-3 text-sm font-medium text-gray-800 sm:pl-6 sm:max-w-0">
                                        {{ $member->name }}
                                        <dl class="lg:hidden font-normal">
                                            <dt class="sr-only lg:hidden">Email</dt>
                                            <dd class="lg:hidden text-gray-600">{{ $member->email }}</dd>
                                            <dt class="sr-only sm:hidden">Points</dt>
                                            <dd class="text-gray-400 sm:text-gray-600 sm:hidden">{{ $member->points }}
                                            </dd>
                                        </dl>
                                    </td>
                                    <td class="hidden lg:table-cell whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $member->email }}
                                    </td>
                                    <td class="hidden sm:table-cell whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $member->points }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $member->level }}
                                    </td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="#"
                                            class="hover:underline text-teal-500 hover:text-teal-800 transition-colors duration-200">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>

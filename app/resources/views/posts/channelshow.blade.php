<x-app-layout>
    <div class="px-3 py-6 lg:px-7">
        <!-- Search and filter inputs -->
        {{-- <form method="GET" action="{{ route('posts.data') }}">
            <input type="text" name="search" value="{{ $search }}" placeholder="Search channels"
                class="border border-gray-300 rounded py-2 px-3 mb-4">
            <button type="submit" class="py-2 px-4 bg-yellow-500 text-white rounded">Search</button>
        </form> --}}

        <!-- Table to display service lists -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 align:center">
                <!-- Table headers -->
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-4 py-3">Channel id</th>
                        <th scope="col" class="px-4 py-3">Channel name</th>
                        <th scope="col" class="px-4 py-3">Service id</th>
                        <th scope="col" class="px-4 py-3">Service name</th>
                        <th scope="col" class="px-4 py-3">ESB type</th>
                        <th scope="col" class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($servicelists as $service)
                        <tr>
                            <td class="px-4 py-3">{{ $service->channel_id }}</td>
                            <td class="px-4 py-3">{{ $service->channel_name }}</td>
                            <td class="px-4 py-3">{{ $service->service_id }}</td>
                            <td class="px-4 py-3">{{ $service->service_name }}</td>
                            <td class="px-4 py-3">{{ $service->esb_type }}</td>
                            <td class="px-4 py-3">
                                <!-- Example button to open modal, adjust as needed -->
                                <button class="px-3 py-1 bg-green-500 text-white rounded"
                                    wire:click="openModal({{ $service->id }})">
                                    Open Modal
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination links -->
        <div class="py-4 px-3">
            {{ $servicelists->links() }}
        </div>
    </div>

    <!-- Modal section -->
    @if ($modal)
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
            <div class="px-4 py-5 sm:px-6 bg-gray-100 flex justify-between items-center">
                <h4 class="text-lg font-medium leading-6 text-gray-900"> Service name</h4>
                <h5 class="text-lg font-small leading-9 text-gray-900">{{ $selectedService['service_name'] }}</h5>
                {{-- <button type="button" class="text-gray-400 hover:text-gray-600" wire:click="closeModal">
                    &times;
                </button> --}}
            </div>
            {{-- <div class="px-4 py-5 sm:p-6">
                <h5> Service Description</h5>
                <p>{{ $selectedService['service_name'] }}</p>
                <!-- Add other details as needed -->
            </div> --}}
            {{-- <div class="px-4 py-5 sm:p-6 w-full">

                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">
                    Sample Request</label>
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-neutral-100 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="{{ $selectedService['service_name'] }}"></textarea>

            </div> --}}

{{--
            <div class="px-4 py-5 sm:p-6 w-full">
<<<<<<< HEAD
                <button type="button"
                    class="px-4 py-2 mr-2 text-white bg-orange-500 rounded-md hover:bg-orange-700"
                    wire:click="downloadPostman({{ $selectedService['id'] }})">
                    <i class='bx bx-cloud-download bx-flashing'> download </i>
                </button>
            </div>
=======
                <a type="button" class="px-4 py-2 mr-2 text-white bg-orange-500 rounded-md hover:bg-orange-700" href="/download_postman/{{ $selectedService['id'] }}"
                    {{-- wire:click="download({{ $selectedService['service_id'] }})"> --}}
                    {{-- <i class='bx bx-cloud-download bx-flashing'>
                        download
                    </i></a>

            </div> --}}
>>>>>>> 6cda0da323414c21696d92d06f7bf45ef0bb21a5

            {{-- <div class="px-4 py-5 sm:p-6 w-full">
                <button type="button" class="px-4 py-2 mr-2 text-white bg-orange-500 rounded-md hover:bg-orange-700" wire:click="downloadPostman({{ $selectedService['id'] }})">
                    <i class='bx bx-cloud-download bx-flashing'> download </i>
                </button>
            </div> --}}

            {{-- <div class="px-4 py-5 sm:p-6 w-full">
                <button type="button" class="px-4 py-2 mr-2 text-white bg-orange-500 rounded-md hover:bg-orange-700" wire:click="downloadPostman({{ $selectedService['id'] }})">
                    <i class='bx bx-cloud-download bx-flashing'>Download Postman Collection</i>
                </button>
            </div> --}}

            <div class="px-4 py-4 sm:px-6 bg-gray-100 flex justify-end">
                <button type="button" class="px-4 py-2 mr-2 text-white bg-gray-500 rounded-md hover:bg-gray-700"
                    wire:click="closeModal">Close</button>
                    <button type="button" class="px-4 py-2 mr-2 text-white bg-orange-500 rounded-md hover:bg-orange-700" wire:click="downloadPostman({{ $selectedService['id'] }})">
                        <i class='bx bx-cloud-download bx-flashing'>Download Postman Collection</i>
                    </button>
            </div>

        </div>
        </section>
    </div>

@endif

</div>

</x-app-layout>

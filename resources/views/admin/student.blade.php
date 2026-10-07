<x-admin.layout>

    <div class="max-w-6xl">

        <!-- ========================= -->
        <!-- STUDENT CARD -->
        <!-- ========================= -->

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6">

            <!-- ========================= -->
            <!-- HEADER STUDENTS -->
            <!-- ========================= -->

            <div class="flex items-center justify-between mb-6">

                <div>
                    <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                        {{ $title }}
                    </h1>

                    <p class="mt-2 text-gray-600 dark:text-gray-400">
                        {{ $description }}
                    </p>
                </div>


                <!-- ========================= -->
                <!-- TOMBOL ADD STUDENT -->
                <!-- ========================= -->

                <a
                    href="#"
                    class="inline-flex items-center justify-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-4 py-2"
                >

                    <!-- ICON PLUS -->

                    <svg
                        class="w-5 h-5 me-2"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        fill="none"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M5 12h14m-7-7v14"
                        />
                    </svg>

                    Add Student

                </a>

            </div>


            <!-- ========================= -->
            <!-- TABEL STUDENT -->
            <!-- ========================= -->

            <div
                class="relative overflow-x-auto bg-[#101828] shadow-sm rounded-xl border border-gray-700"
            >

                <!-- ========================= -->
                <!-- SEARCH & FILTER -->
                <!-- ========================= -->

                <div class="p-4 flex items-center justify-between space-x-4 bg-[#101828]">

                    <!-- SEARCH -->

                    <div>

                        <label for="input-group-1" class="sr-only">
                            Search
                        </label>

                        <div class="relative">

                            <!-- SEARCH ICON -->

                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">

                                <svg
                                    class="w-4 h-4 text-gray-400"
                                    aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-width="2"
                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"
                                    />
                                </svg>

                            </div>


                            <input
                                type="text"
                                id="input-group-1"
                                class="block w-full max-w-96 ps-9 pe-3 py-2 bg-[#101828] border border-gray-600 text-gray-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 shadow-xs placeholder-gray-500"
                                placeholder="Search"
                            >

                        </div>

                    </div>


                    <!-- ========================= -->
                    <!-- FILTER -->
                    <!-- ========================= -->

                    <button
                        id="dropdownDefaultButton"
                        data-dropdown-toggle="dropdown"
                        class="shrink-0 inline-flex items-center justify-center text-gray-200 bg-[#101828] border border-gray-600 hover:bg-[#172033] focus:ring-4 focus:ring-gray-700 shadow-xs font-medium rounded-lg text-sm px-3 py-2"
                        type="button"
                    >

                        <!-- FILTER ICON -->

                        <svg
                            class="w-4 h-4 me-1.5 -ms-0.5"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-width="2"
                                d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z"
                            />
                        </svg>

                        Filter by

                        <svg
                            class="w-4 h-4 ms-1.5 -me-0.5"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="none"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m19 9-7 7-7-7"
                            />
                        </svg>

                    </button>


                    <!-- ========================= -->
                    <!-- DROPDOWN FILTER -->
                    <!-- ========================= -->

                    <div
                        id="dropdown"
                        class="z-10 hidden bg-[#101828] border border-gray-700 rounded-lg shadow-lg w-32"
                    >

                        <ul
                            class="p-2 text-sm text-gray-200 font-medium"
                            aria-labelledby="dropdownDefaultButton"
                        >

                            <li>
                                <a
                                    href="#"
                                    class="inline-flex items-center w-full p-2 hover:bg-[#172033] rounded"
                                >
                                    Kelas
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#"
                                    class="inline-flex items-center w-full p-2 hover:bg-[#172033] rounded"
                                >
                                    Status
                                </a>
                            </li>

                            <li>
                                <a
                                    href="#"
                                    class="inline-flex items-center w-full p-2 hover:bg-[#172033] rounded"
                                >
                                    NIS
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>


                <!-- ========================= -->
                <!-- TABLE -->
                <!-- ========================= -->

                <table class="w-full text-sm text-left rtl:text-right text-gray-300 bg-[#101828]">

                    <!-- ========================= -->
                    <!-- HEADER TABEL -->
                    <!-- ========================= -->

                    <thead class="text-sm text-gray-200 bg-[#101828] border-b border-gray-700">

                        <tr>

                            <!-- CHECKBOX -->

                            <th scope="col" class="p-4">

                                <div class="flex items-center">

                                    <input
                                        id="table-checkbox-all"
                                        type="checkbox"
                                        value=""
                                        class="w-4 h-4 border border-gray-600 rounded bg-[#101828] focus:ring-2 focus:ring-blue-500"
                                    >

                                    <label
                                        for="table-checkbox-all"
                                        class="sr-only"
                                    >
                                        Table checkbox
                                    </label>

                                </div>

                            </th>


                            <!-- NAMA -->

                            <th
                                scope="col"
                                class="px-6 py-3 font-medium text-gray-200"
                            >
                                Nama
                            </th>


                            <!-- KELAS -->

                            <th
                                scope="col"
                                class="px-6 py-3 font-medium text-gray-200"
                            >
                                Kelas
                            </th>


                            <!-- NIS -->

                            <th
                                scope="col"
                                class="px-6 py-3 font-medium text-gray-200"
                            >
                                NIS
                            </th>


                            <!-- STATUS -->

                            <th
                                scope="col"
                                class="px-6 py-3 font-medium text-gray-200"
                            >
                                Status
                            </th>


                            <!-- ACTION -->

                        </tr>

                    </thead>


                    <!-- ========================= -->
                    <!-- ISI TABEL -->
                    <!-- ========================= -->

                    <tbody>

                        @foreach ($students as $index => $student)

                            <tr
                                class="bg-[#101828] border-b border-gray-700 hover:bg-[#172033]"
                            >

                                <!-- CHECKBOX -->

                                <td class="w-4 p-4">

                                    <div class="flex items-center">

                                        <input
                                            id="table-checkbox-{{ $index }}"
                                            type="checkbox"
                                            value="{{ $student['nis'] }}"
                                            class="w-4 h-4 border border-gray-600 rounded bg-[#101828] focus:ring-2 focus:ring-blue-500"
                                        >

                                        <label
                                            for="table-checkbox-{{ $index }}"
                                            class="sr-only"
                                        >
                                            Table checkbox
                                        </label>

                                    </div>

                                </td>


                                <!-- NAMA -->

                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-white whitespace-nowrap"
                                >
                                    {{ $student['nama'] }}
                                </th>


                                <!-- KELAS -->

                                <td class="px-6 py-4 text-gray-300">
                                    {{ $student['kelas'] }}
                                </td>


                                <!-- NIS -->

                                <td class="px-6 py-4 text-gray-300">
                                    {{ $student['nis'] }}
                                </td>


                                <!-- STATUS -->

                                <td class="px-6 py-4 text-gray-300">
                                    {{ $student['status'] }}
                                </td>


                                <!-- ACTION -->

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</x-admin.layout>

<x-admin.layout>

    <div class="max-w-3xl">

        <!-- About Card -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6">

            <!-- Title -->
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
                    {{ $title }}
                </h1>

                <p class="mt-2 text-gray-600 dark:text-gray-400">
                    {{ $description }}
                </p>
            </div>

            <!-- Information -->
            <div class="space-y-4">

                <div>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Nama
                    </p>

                    <p class="text-lg font-medium text-gray-900 dark:text-white">
                        {{ $nama }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        Kelas
                    </p>

                    <p class="text-lg font-medium text-gray-900 dark:text-white">
                        {{ $kelas }}
                    </p>
                </div>

                <div>
                    <p class="text-sm text-gray-500 dark:text-gray-400">
                        GitHub
                    </p>

                    <a
                        href="{{ $repository }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-lg font-medium text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300 hover:underline"
                    >
                        {{ $repository }}
                    </a>
                </div>

            </div>
        </div>

    </div>

</x-admin.layout>

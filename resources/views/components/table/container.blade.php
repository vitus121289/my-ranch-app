<!-- component -->
<section class="antialiased bg-gray-100 text-gray-600 px-4">
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-4xl mx-auto bg-white rounded-sm border border-gray-200 mt-2">
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        {{ $slot }}
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
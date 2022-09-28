<x-app-layout>
    <x-slot name="header">
        Dams Index
    </x-slot>
    <x-table.container>
        <x-table.head>
            <x-table.head-col>
                Number
            </x-table.head-col>
            <x-table.head-col>
                Weight
            </x-table.head-col>
            <x-table.head-col>
                Remarks
            </x-table.head-col>
            <x-table.head-col colspan="2">
                Actions
            </x-table.head-col>
        </x-table.head>
        <x-table.body>
            <tr>
                <x-table.body-col class="flex items-center">
                    <div class="flex items-center">
                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg" width="40" height="40"></div>
                        <div class="font-medium text-gray-800">01-20</div>
                    </div>
                </x-table.body-col>
                <x-table.body-col class="text-center font-medium text-gray-800">
                    280Kg
                </x-table.body-col>
                <x-table.body-col class="text-center font-medium text-gray-800">
                    None
                </x-table.body-col>
                <x-table.body-col class="text-center font-medium text-blue-500">
                    Edit
                </x-table.body-col>
                <x-table.body-col class="text-center font-medium text-red-500">
                    Delete
                </x-table.body-col>
            </tr>
        </x-table.body>
    </x-table.container>
</x-app-layout>
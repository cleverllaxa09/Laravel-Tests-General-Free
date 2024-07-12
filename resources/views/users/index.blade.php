<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Registered at</th>
                            </tr>
                        </thead>
                        {{-- Task: add the loop here to show users, or the row "No content" --}}
                        <tbody>
                            @foreach ($users as $user)
                            <tr class="border  border-spacing-2">
                                <td class=" border ">{{ $user->name }}</td>
                                <td class=" border ">{{ $user->email }}</td>
                                <td class=" border ">{{ $user->created_at }}</td>
                            </tr>
                            @endforeach
                  
                      
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

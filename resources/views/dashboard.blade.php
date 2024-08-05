<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h3>File upload here</h3>
            <a href="{{ route('upload.form') }}" class="ms-4" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #007bff; text-decoration: none; border-radius: 5px;">Go to File Upload</a>
        </h2>
    </x-slot>

</x-app-layout>
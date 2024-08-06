<x-app-layout>
    <x-slot name="header">
       
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <h3>Upload File</h3>
            <a href="{{ route('upload.form') }}" class="btn btn-secondary mt-2" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #007bff; text-decoration: none; border-radius: 5px;">Upload file</a>
        </h2>
       
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-4">
            <h3>Log the IP-Address</h3>
            <a href="{{ route('ip.log') }}" class="btn btn-secondary mt-2" style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #007bff; text-decoration: none; border-radius: 5px;">Log IP</a>
        </h2>
   

    </x-slot>

</x-app-layout>
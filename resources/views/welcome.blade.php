<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Livewire </title>

        @livewireStyles
    </head>
    <body>

        <div class="max-w-3xl mx-auto mt-10 sm:px-6 lg:px-8 bg-gray-100">
            <livewire:book-live />
        </div>

        @livewireScripts

        <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>

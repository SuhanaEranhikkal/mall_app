<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __(' Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{route('users')}}"><button type="button" class="btn btn-dark">view users</button></a>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{route('shop')}}"><button type="button" class="btn btn-dark">view shops</button></a>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{route('view_product')}}"><button type="button" class="btn btn-dark">view products</button></a>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{route('request')}}"><button type="button" class="btn btn-dark">view request</button></a>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>

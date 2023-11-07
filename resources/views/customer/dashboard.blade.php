<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div >
                
                <div >
                   
                <a href="{{route('register_shop',($id))}}"><button type="button" class="btn btn-dark">register a shop</button></a><br>
                
                <br>
                <a href="{{route('products')}}"><button type="button" class="btn btn-dark">view products</button></a>    
            </div>
                
            
              
                
            </div>
        </div>
    </div>
</x-app-layout>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
    </head>
</html>
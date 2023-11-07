<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <table>
    
   
  
      <tr>
    
      <th>id</th>
        <th>name</th>
         
            <th>email</th>
        
       
         <th>usertype</th>
         <th>action</th>
      </tr>
   
     @foreach($users as $user)
      <tr>
    
        <td>{{$loop->iteration}}</td>
        <td>{{$user->name}}</td>
       
        <td>{{$user->email}}</td>
        
        <td>{{$user->usertype}}</td>
        
        <td>
    
     <a href="{{route('delete_user',$user->id)}}"><button type="button" class="btn btn-danger">delete</button>
        
    
        </td>
      </tr>
      @endforeach
     <!-- <div>
    
      </div>-->
        
    </table>
    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
th {
  background-color: #04AA6D;
  color: white;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<!--@if(session('message'))
<script>alert('Data inserted successfully')</script>
@endif-->


</body>
</html>




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
                <div class="card">
    <!-- Start Card Body -->
    <div class="card-body">
       
      <!-- Start Form -->
      <form action="{{route('verify',($users->id))}}" method="post" class="needs-validation" novalidate autocomplete="off">
        @csrf
        
        <input type="hidden" name="id" value="{{$users->id}}">
        <div class="form-group">
       
          <label for="Name">name</label>
          <input type="text" class="form-control"  name="ownername"   required />
         
        </div>
       
        <div class="form-group">
          <label for="shop name">shop name</label>
          <input type="text" class="form-control"  name="shopname"   required />
          
        </div>
       
        <div class="form-group">
          <label for="phone">phone</label>
          <input type="text" class="form-control"  name="phone"  required />
          </div> 
             
        <div>
         <button class="btn btn-primary btn-block col-lg-2" type="submit">Submit</button>
         </div>  
        
   
      </form>
    
  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<!DOCTYPE html>
<head>
   
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />


</head>

<body class="container bg-light">
 
  

</body>
</html>
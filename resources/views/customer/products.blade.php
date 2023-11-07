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
                  <div>



  

                  <form id="filterForm">
    <label for="category">Filter by Category:</label>
    <select name="category" id="category">
        <option value="all" selected>All Categories</option>
        
        @foreach($categories as $category)
        <option value="{{ $category }}">{{ $category }}</option>
    @endforeach
    </select>
</form>
<div id="productsContainer">
<table>
      
      <tr>
    
      <br><th>id</th>
      
         
            <th>product name</th>
         <th>category</th>
         <th>price</th>
         <th>own/public</th>

      </tr>
   
     @foreach($products as $product)
      <tr>
    
        <td>{{$loop->iteration}}</td>
       
       
        <td>{{$product->product_name}}</td>
        
        <td>{{$product->category}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->option}}</td>
        <td>
    
    
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
</div>

   
                  </div>
                
                
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script>
   $(document).ready(function() {
    $('#category').change(function() {
        let category = $(this).val();

        $.ajax({
            url: '/products',
            type: 'GET',
            data: { category: category },
            success: function(response) {
                // Handle the response, update products container
                $('#productsContainer').html(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});
</script>
</head>
<body>


<!--@if(session('message'))
<script>alert('Data inserted successfully')</script>
@endif-->



</body>
</html>


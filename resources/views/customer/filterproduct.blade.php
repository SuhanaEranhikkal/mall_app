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
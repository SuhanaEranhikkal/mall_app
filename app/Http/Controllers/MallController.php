<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Shop;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MallController extends Controller
{
    public function homepage()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'customer') {

                $id = Auth::id();
                $user = User::find($id);

                return view('customer.dashboard', compact('user', 'id'));
            } else if ($usertype == 'admin') {
                //  $tasks=Task::all();
                return view('admin.dashboard');
            } else if ($usertype == 'shopowner') {
               
                $id=Auth::id();
                return view('shopowner.dashboard',compact('id'));
            } else {
                return redirect()->back();
            }
        }
    }
    public function view_customers()
    {
        return view('admin.view_customers');
    }
    public function shop()
    {
        $usertype = 'shopowner';

        $shops=Shop::all();
        return view('admin.shop',compact('shops'));
       
    }
    public function view_product()
    {
        $products=Product::all();
        return view('admin.view_products',compact('products'));
    }
    public function products(Request $request)
    {
        
       $products=Product::all();
          
     $categories = Product::distinct('category')->pluck('category'); // Fetch unique categories  
     if(request()->ajax()) {
        $category = request('category');

        $products = $category ? Product::where('category', $category)->get() : Product::all();

        return view('customer.filterproduct', compact('products'));
    }

    return view('customer.products', compact('categories','products'));
         
       // return view('customer.products', compact('categories'));
    }
    public function filterproduct($category)
    {
        $products = Product::where('category', $category)->get();
        if(request()->ajax()) {
            return response()->json($products);
        }
        return view('customer.products',compact('products'));
     
        
     
    }

    
    public function register_shop($id)
    {
        $users = User::find($id);
        return view('customer.register', compact('users'));
    }

    public function verify($id)
    {
        $user_id=request('id');
        $name = request('ownername');
        $shopname = request('shopname');
        $phone = request('phone');

        Shop::create([  //entering values to database

             'user_id'=>$user_id,
            'owner_name' => $name,
            'shop_name' => $shopname,
            'phone' => $phone,
        ]);
        return redirect()->route('home');
    }
    public function request()
    {
        $shops = Shop::where('status','not approved')->get();
        return view('admin.request', compact('shops'));
    }
    public function accept($id)
    {
        User::where('id', $id)
        ->update(['usertype' => 'shopowner']);
        
       // $users = User::find($id);
        
   
       // $users->update([
         //   'usertype' => 'shopowner'
        //]);
        $shop=Shop::where('user_id',$id)->get();
        Shop::where('user_id', $id)
        ->update(['status' => 'approved']);
        
        //$shop->status='approved';
        //$user=Task::find($id);
       // $tasks->delete();
       // return redirect()->route('home');

        return redirect()->back();
    }
    public function my_product($id)
    {     
     
        $products=DB::table('products')->where('owner_id',$id)->get();
     
         return view('shopowner.product',compact('products','id'));
        
    }
    public function users()
    {
        $users=User::where('usertype','!=','admin')->get();
        return view('admin.users',compact('users'));
    }
    public function add_product($id)
    {
        $shops=Shop::where('user_id',$id)->first();
        return view('shopowner.add',compact('shops'));
        //return $shops;
    }
    public function set_product($id)
    {
        
        $owner_id=request('id');
      
        $product_name = request('product_name');
        $category = request('category');
        $price = request('price');
        $option = request('option');

        Product::create([  //entering values to database

             'owner_id'=>$owner_id,
            
            'product_name' => $product_name,
            'category' => $category,
            'price' => $price,
            'option' => $option,
        ]);
        return redirect()->route('home');
    }

    public function delete_user($id)
    {
        $users=User::find($id);
        $shop=Shop::where('user_id',$id)->first();
        $products=Product::where('owner_id',$id)->get();
     
        
    

      // return redirect()->route('delete_user',$id);
   
       if( $users->usertype =='shopowner')
       {
        $users->delete();
       // $shop=Shop::where('user_id',$id);
        $shop->delete();
     
        if($products != null)
         $products->delete();
        
        
       }
       else{
        $users->delete();
       }
       return redirect()->route('home');

      
    }
    public function product_delete($id)
    {
     $products=Product::find($id);
     $products->delete();
     return redirect()->route('home');
    }

   }

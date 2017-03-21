<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use GuzzleHttp\Client;
use \Session;
use Illuminate\Support\Facades\Input;
use View;
use Illuminate\Routing\UrlGenerator;
use Mail;

class PagesController extends Controller
{

	// public function __construct()
 //    {
 //    	$productInCart=[];
 //      View::share('productInCart',$productInCart);
 //    }
  public function index(){
    // $data=Session::get('myCart');
    // echo '<pre>'.print_r($data).'<pre>'; die();
    return view('pages/index');
  }

  public function single($proid){
    // $productId=Input::get('productId');
   return view('pages/single',['id' => $proid]);
  }

   public function alltype(){
   	$tmp=[];
  		$alldata=config('gallery.single');
  		foreach($alldata as $item){
  			foreach($item as $subitem){
  				foreach ($subitem as $product) {
  					array_push($tmp, $product);
  				}
  			}
  		}

  		return view('pages.product',array('products'=>$tmp));
   }

    public function emptycard(){
      Session::forget('myCart');
      return redirect('/');
   }

   public function search($name){
      $myproduct=[];
      // $proget=[];
          $products=config('gallery.single');
          // foreach($products as $product){
          //   foreach($product as $item){
             
          //     array_push($myproduct, $item);
          //   }
          // }
          // $pros=config('gallery.single');
          // foreach($pros as $pro){
          //   foreach($pro as $items){
          //     foreach($items as $item){
          //       array_push($myproduct, $item);
          //     }
          //   }
          // }
          foreach($products as $items){
            foreach($items as $item){
              foreach($item as $product){
                // echo '<pre>'.print_r($product,true).'</pre>';die();
                $tmp=$product['title'];
                // echo $product['title'].' == '. $name.'<br/>';
                $pos = stripos($tmp, $name);
                 if($pos !== false){
                    array_push($myproduct,$product);
                 }
                 else{
                    // $proget="Not Found";
                 }
              }
            }
          }
      return json_encode($myproduct,true); 
   }

   public function producttype($category,$subcategory){

   		$allData = config('gallery.single');

   		$products = isset($allData[$category][$subcategory]) ? $allData[$category][$subcategory] : []; // 

   		return view('pages.product', array('products'=> $products));
   }

   public function deleteproduct(){
      $productId=Input::get('productId');
      $deletekey;
      $products=Session::get('myCart');
      foreach($products as $key => $product){
         if($product['id']==$productId){
          $deletekey=$key;
          break;
        }
       
      }
       unset($products[$key]);
       $tmp=$products;
       Session::forget('myCart');
       Session::put('myCart',$tmp);
      return redirect('/checkout');
     
   }
   public function buynow(){
      $phone=Input::get('phone');
      $location=Input::get('location');
      $producttitle=Input::get('producttitle');
      $productprice=Input::get('productprice');
      $client = new \GuzzleHttp\Client();
      $client->setDefaultOption('verify', false);
          $inputAll=Input::all();
          try{
              // Validate input
                  Mail::queue('emails.emails_sender',
                      [
                          'phone'=>Input::get('phone'),
                          'location'=>Input::get('location'),
                          'producttitle'=>Input::get('producttitle'),
                          'productprice'=>Input::get('productprice')
                      ], function($message)
                  {
                      $message->from('ahcico697@gmail.com', 'Grand Phnom Penh International City (GPPIC)');
                      $message->to('srengguecklysreng@gmail.com')->subject('Welcome to SyClction Online Shop');
                  });
                  $inputAll = [];
                  $inputAll['error_msg'] = 'Thank you! Your submission is complete';
                  $inputAll['error_type'] = 'success';

                  $productId=Input::get('productId');
                  $deletekey;
                  $products=Session::get('myCart');
                  foreach($products as $key => $product){
                     if($product['id']==$productId){
                      $deletekey=$key;
                      break;
                    }
                   
                  }
                   unset($products[$key]);
                   $tmp=$products;
                   Session::forget('myCart');
                   Session::put('myCart',$tmp);

                  return redirect('/checkout')->with($inputAll);
          }
          catch (\Exception $e){  
              $inputAll = Input::all();
              $inputAll['error_msg'] = 'Something\'s wrong with sending email to us! ' . $e->getMessage();
              $inputAll['error_type'] = 'error';
              return redirect('/checkout')->with('data',$inputAll);
          }
   }
   public function addtocart(){
   		$productId = Input::get('productId');
      $data;
    
        $alldata=config('gallery.single');
        foreach($alldata as $items){
          foreach($items as $item){ 
            foreach($item as $product){
              if($product['id']==$productId){
                $data=$product;
              }
            }
          }
        }

       Session::push('myCart', $data);

      $tm=Session::get('myCart');
      // echo '<pre>'.print_r($tm,true).'</pre>';
      return redirect('/');
   }
}
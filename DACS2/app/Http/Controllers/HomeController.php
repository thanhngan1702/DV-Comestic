<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Htpp\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(6)->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.home')->with('brand',$brand_product)->with('all_product',$all_product);
    }

    public function shop(){
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->get();
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.products')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
    }

    public function contact(){
        return view('pages.contact');
    }
    public function about(){
        return view('pages.about');
    }
    public function search(Request $request){
        $keywords = $request->keywords_submit;
        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.product.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product);

    }
}

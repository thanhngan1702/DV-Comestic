<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Htpp\Requests;
use Mail;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){
        //seo
        //$meta_desc = "Chuyên bán mỹ phẩm và phụ kiện. Khám phá thêm nhiều dòng son trendy, cùng sản phẩm makeup đa công dụng và thời thượng!";
        //$meta_keywords = "phụ kiện, mỹ phẩm, sắc đẹp, skincare";
        //$meta_title = "Cửa hàng bán mỹ phẩm - DV Cosmetic";
        //$url_canonical = $request->url();

        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(6)->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.home')->with('brand',$brand_product)->with('all_product',$all_product);
        //->with('meta_desc',$meta_desc)
        //->with('meta_keywords',$meta_keywords)
        //->with('meta_title',$meta_title)
        //->with('url_canonical',$url_canonical);
    }

    public function shop(){
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->get();
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.products')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
        //return view('pages.products')->with(compact('cate_product','brand_product','all_product')); --C2
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
    public function send_mail(){
        $to_name = "Vanmei";
        $to_email = "hthvan.20it2@vku.udn.vn";
        $data = array('name'=>"Mail từ tài khoản khách hàng","body"=>"Mail gửi về vấn đề hàng hóa");
        Mail::send('pages.send_mail',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject("Test gửi mail");
            $message->from($to_email,$to_name);
        });
        return Redirect('/')->with('message','');
    }
}

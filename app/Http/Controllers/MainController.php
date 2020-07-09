<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartment = Post::where('cate_id',Post::CHUNG_CU_MINI)->paginate(9);
        $motel = Post::where('cate_id',Post::PHONG_TRO)->paginate(9);
        $planes = Post::where('cate_id',Post::MAT_BANG)->paginate(9);
        $service_house = Post::where('cate_id',Post::NHA_DICH_VU)->paginate(9);
        return view('welcome',compact(['apartment','motel','planes','service_house']));
    }

   public function contact()
   {
       return view('contact');
   }
}

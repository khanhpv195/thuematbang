<?php

namespace Modules\Post\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function Apartments()
    {
        $apartment = Post::where('cate_id',Post::CHUNG_CU_MINI)->paginate(12);
        return view('post::apartment.index',compact(['apartment']));
    }

    public function Motel()
    {

        $motel = Post::where('cate_id',Post::PHONG_TRO)->paginate(12);
        return view('post::motel.index',compact(['motel']));
    }

    public function Planes()
    {
        $planes = Post::where('cate_id',Post::MAT_BANG)->paginate(12);
        return view('post::planes.index',compact(['planes']));
    }

    public function HouseService()
    {
        $service_house = Post::where('cate_id',Post::NHA_DICH_VU)->paginate(12);
        return view('post::house_service.index',compact(['service_house']));
    }


    public function show($slug,$id)
    {
        $post = Post::find($id);
        return view('post::show',compact('post'));
    }

}

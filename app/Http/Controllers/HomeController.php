<?php

namespace App\Http\Controllers;

use App\Models\Tin;
use App\Models\PostType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct(Tin $Tin)
    {
        $popularPosts = $Tin->popularPosts();

        $menu = DB::table('theloai')->select('idTL', 'TenTL')
            ->orderby('ThuTu','asc')
            ->where('AnHien','=','1')->where('lang','=','vi')
            ->limit(5)->get();

        view()->share(compact('popularPosts', 'menu'));
    }

    public function index(Tin $Tin, PostType $PostType){
        $latestPost = $Tin->latestPost(); // get all latest post

        $postType = $PostType->getPostTypes();  // get list post type

        $flashNews =  Tin::inRandomOrder()->where('AnHien', 1)->where('lang', 'vi')->take(6)->get();                  // get list flash new

        $topNews = $Tin->topNews();

        $socialPosts = DB::table('Tin')
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
            ->where('tin.AnHien', 1)->where('tin.idTL', 1)
            ->orderby('Ngay','desc')->where('tin.AnHien','=','1')
            ->offset(0)->limit(4)->get();

        $lifePosts = DB::table('Tin')
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
            ->where('tin.AnHien', 1)->where('tin.idTL', 3)
            ->orderby('Ngay','desc')->where('tin.AnHien','=','1')
            ->offset(0)->limit(4)->get();

        $enjoyPosts = DB::table('Tin')
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
            ->where('tin.AnHien', 1)->where('tin.idTL', 6)
            ->orderby('Ngay','desc')->where('tin.AnHien','=','1')
            ->offset(0)->limit(4)->get();

        return view('pages.index', compact('latestPost', 'postType', 'socialPosts', 'lifePosts', 'enjoyPosts', 'flashNews', 'topNews'));

    }
    public function postById(Tin $Tin){
        $count = DB::table('Tin')->select('Tin.idTin', 'ykien.NoiDung', 'ykien.idYKien', 'ykien.HoTen', 'ykien.Ngay')
            ->join('ykien', 'Tin.idTin', '=', 'ykien.idTin')
            ->where('Tin.idTin', '=', $Tin->idTin)->get();
        return view('pages.postDetail', compact('Tin', 'count'  ));
    }

    public function category($id){
        settype($id, "int");
        $postType = DB::table('loaitin')->where('idLT', $id)->value('Ten');
        $idLT = DB::table('loaitin')->where('idLT', $id)->value('idTL');
        $pageTitle = DB::table('theloai')->where('idTL', $idLT)->value('TenTL');
        $results = DB::table('tin')->select('tin.idTin', 'tin.TomTat', 'tin.urlHinh', 'tin.Ngay', 'tin.TieuDe', 'tin.slug', 'loaitin.Ten')
            ->join('loaitin', 'Tin.idLT', '=', 'loaitin.idLT')
            ->where('tin.idLT', $id)->where('tin.AnHien', 1)->paginate(4);
        return view('pages.category', compact('results', 'pageTitle', 'postType'));
    }
}

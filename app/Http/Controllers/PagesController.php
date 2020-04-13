<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $songs = Song::orderBy('title','asc')->paginate(1);
        // $songs = Song::all();
        // $Song = Song::where('id', '1')->get();
        // $songs = DB::select('SELECT  = FROM songs');
        return view('songs.index')->with('songs', $songs);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title' => 'SERVICES',
            'services' => ['Web Design', 'Programming', 'SEO']
        );

        return view('pages.services') -> with($data);
    }
}



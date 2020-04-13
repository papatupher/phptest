<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
class SongsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $songs = Song::orderBy('title','asc')->get();
        // $songs = Song::orderBy('title','asc')->take(1)->get();
        $songs = Song::orderBy('title','asc')->paginate(1);
        // $songs = Song::all();
        // $Song = Song::where('id', '1')->get();
        // $songs = DB::select('SELECT  = FROM songs');
        return view('songs.index')->with('songs', $songs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'artist' => 'required',
            'lyrics' => 'required',

        ]);

        $Song = new Song;
        $Song->title = $request->input('title');
        $Song->artist = $request->input('artist');
        $Song->lyrics = $request->input('lyrics');
        $Song->user_id = auth()->user()->id;
        $Song->save();

        return redirect('/songs')->with('success', 'Song Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Song = Song::find($id);
        return view('songs.show')->with('Song', $Song);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Song = Song::find($id);
        return view('songs.edit')->with('Song', $Song);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'artist' => 'required',
            'lyrics' => 'required',
        ]);

        $Song = Song::find($id);
        $Song->title = $request->input('title');
        $Song->artist = $request->input('artist');
        $Song->lyrics = $request->input('lyrics');
        $Song->save();

        return redirect('/songs')->with('success', 'Song Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Song = Song::find($id);
        $Song->delete();
        return redirect('/songs')->with('success', 'Song Remove!');
    }
}

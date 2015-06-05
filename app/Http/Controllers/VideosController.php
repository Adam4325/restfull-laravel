<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Session\TokenMismatchException;
use App\Videos;
use DB;


class VideosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$vid = Videos::get();
		return response()->json([
			"msg"=>"Success",
			"data"=>$vid->toArray()
			],200);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$vid = new Videos();
		$vid->title = $request->title;
		$vid->author = $request->author;
		$vid->summary = $request->summary;
		$vid->save();
		return response()->json([
			"msg"=>"Success",
			"id"=>$vid->id
			],200);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$vid  = Videos::find($id);
		return response()->json([
			"msg"=>"Success",
			"video"=>$vid
			],200);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{	
		//$input = Request::all();
		$vid  = Videos::find($id);
		$vid->title 	= $request->title;
		$vid->author 	= $request->author;
		$vid->summary 	= $request->summary;
		$vid->save();
		return response()->json([
			"msg"=>"Update Success",
			"title"=>$request->title
			],200);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$vid  = Videos::find($id);
		$vid->delete();
		return response()->json([
			"msg"=>"Deleted Success",
			],200);
	}

}

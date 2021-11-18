<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Admin;
use App\Models\Cinema;
use DB;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movie = Movie::all();
        return view('movies')->with('movie',$movie);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $admin = Admin::all();
        $cinema = Cinema::all();
        return view('addmovie')->with('admin',$admin)->with('cinema', $cinema);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $movie = new Movie();

        $movie->coverImage = $request->coverImage;
        $movie->bannerImage = $request->bannerImage;
        $movie->name = $request->name;
        $movie->ticketPrice = $request->ticketPrice;
        $movie->place = $request->place;
        $movie->status = $request->status;


        // var_dump($request->hasFile('coverImage'));
        // exit();
        // Cover Image Store
        if ($request->hasFile('coverImage') && $_FILES['coverImage']['name'] != '') {
        $filename = $_FILES['coverImage']['name'];
        $temp = $_FILES['coverImage']['tmp_name'];

        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $imageName = pathinfo($filename, PATHINFO_FILENAME);

        $original_file_name = './cover-image/'.$imageName.'.'.$ext;
        move_uploaded_file($temp,$original_file_name);
        $file_large = './cover-image/main-images/'.$imageName.'-large.'.$ext;
        // copy($original_file_name,$file_large);



        $movie->coverImage = $file_large;

        //large code
        $filename = $original_file_name;
        $percent = 0.7;

        // Content type
        header('Content-Type: image/jpeg');

        // Get new sizes
        list($width, $height) = getimagesize($filename);
        $newwidth = 500;
        $newheight = 500;

        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        if($ext=='png'){
            //$source = imagecreatefromjpeg($filename);
            $source = imagecreatefrompng($filename);
            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


            //imagejpeg($thumb,'./xyz.jpg');
            imagepng($thumb,$file_large);
        }else{
                $source = imagecreatefromjpeg($filename);
            // $source = imagecreatefrompng($filename);
            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagejpeg($thumb,$file_large);
        }
    }
    if ($request->hasFile('bannerImage') && $_FILES['bannerImage']['name'] != '') {

        // Banner Image Store
        $filename = $_FILES['bannerImage']['name'];
        $temp = $_FILES['bannerImage']['tmp_name'];

        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $imageName = pathinfo($filename, PATHINFO_FILENAME);

        $original_file_name = './banner-image/'.$imageName.'.'.$ext;
        move_uploaded_file($temp,$original_file_name);
        $file_large = './banner-image/main-images/'.$imageName.'-large.'.$ext;
        // copy($original_file_name,$file_large);



        $movie->bannerImage = $file_large;

        //large code
        $filename = $original_file_name;
        $percent = 0.7;

        // Content type
        header('Content-Type: image/jpeg');

        // Get new sizes
        list($width, $height) = getimagesize($filename);
        $newwidth = 500;
        $newheight = 500;

        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        if($ext=='png'){
            //$source = imagecreatefromjpeg($filename);
            $source = imagecreatefrompng($filename);
            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


            //imagejpeg($thumb,'./xyz.jpg');
            imagepng($thumb,$file_large);
        }else{
                $source = imagecreatefromjpeg($filename);
            // $source = imagecreatefrompng($filename);
            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagejpeg($thumb,$file_large);
        }

    }
        $movie->save();

        $movie = Movie::all();

        session(['alert' => 'Movie Added Sucessfully', 'class' => 'alert alert-success']);
        return redirect()->route('movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $movie = Movie::where('id',$id)->first();
        return view('viewmovie')->with('movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $movie = Movie::where('id',$id)->first();
        $cinema = Cinema::all();
        return view('editmovie')->with('movie', $movie)->with('cinema', $cinema);
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
        //
        $movie = Movie::where('id',$id)->first();

        // $movie->coverImage = $request->coverImage;
        // $movie->bannerImage = $request->bannerImage;
        $movie->name = $request->name;
        $movie->ticketPrice = $request->ticketPrice;
        $movie->place = $request->place;
        $movie->status = $request->status;


        // var_dump($request->hasFile('coverImage'));
        // exit();
        // Cover Image Store
        if ($request->hasFile('coverImage')) {
        $filename = $_FILES['coverImage']['name'];
        $temp = $_FILES['coverImage']['tmp_name'];

        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $imageName = pathinfo($filename, PATHINFO_FILENAME);

        $original_file_name = './cover-image/'.$imageName.'.'.$ext;
        move_uploaded_file($temp,$original_file_name);
        $file_large = './cover-image/main-images/'.$imageName.'-large.'.$ext;
        // copy($original_file_name,$file_large);



        $movie->coverImage = $file_large;

        //large code
        $filename = $original_file_name;
        $percent = 0.7;

        // Content type
        header('Content-Type: image/jpeg');

        // Get new sizes
        list($width, $height) = getimagesize($filename);
        $newwidth = 500;
        $newheight = 500;

        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        if($ext=='png'){
            //$source = imagecreatefromjpeg($filename);
            $source = imagecreatefrompng($filename);
            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


            //imagejpeg($thumb,'./xyz.jpg');
            imagepng($thumb,$file_large);
        }else{
                $source = imagecreatefromjpeg($filename);
            // $source = imagecreatefrompng($filename);
            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagejpeg($thumb,$file_large);
        }
    }
    if ($request->hasFile('bannerImage')) {

        // Banner Image Store
        $filename = $_FILES['bannerImage']['name'];
        $temp = $_FILES['bannerImage']['tmp_name'];

        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $imageName = pathinfo($filename, PATHINFO_FILENAME);

        $original_file_name = './banner-image/'.$imageName.'.'.$ext;
        move_uploaded_file($temp,$original_file_name);
        $file_large = './banner-image/main-images/'.$imageName.'-large.'.$ext;
        // copy($original_file_name,$file_large);



        $movie->bannerImage = $file_large;

        //large code
        $filename = $original_file_name;
        $percent = 0.7;

        // Content type
        header('Content-Type: image/jpeg');

        // Get new sizes
        list($width, $height) = getimagesize($filename);
        $newwidth = 500;
        $newheight = 500;

        // Load
        $thumb = imagecreatetruecolor($newwidth, $newheight);
        if($ext=='png'){
            //$source = imagecreatefromjpeg($filename);
            $source = imagecreatefrompng($filename);
            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);


            //imagejpeg($thumb,'./xyz.jpg');
            imagepng($thumb,$file_large);
        }else{
                $source = imagecreatefromjpeg($filename);
            // $source = imagecreatefrompng($filename);
            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            imagejpeg($thumb,$file_large);
        }

    }
        $movie->update();

        $movie = Movie::all();

        session(['alert' => 'Movie Updated Sucessfully', 'class' => 'alert alert-success']);
        return redirect()->route('movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $movie = Movie::where('id', $id)->first();
        $movie->delete();

        $movie = Movie::all();
        session(['alert' => 'Movie Delete Sucessfully', 'class' => 'alert alert-danger']);
        return redirect()->route('movie');
    }
}

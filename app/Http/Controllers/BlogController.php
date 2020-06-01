<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = DB::table('gestion_activites')
            ->latest()->paginate(4);
        $autres_blogs = DB::table('gestion_activites')
            ->latest()
            ->offset(2)
            ->limit(4)
            ->get();

        return view('index', [
            'blogs' => $blogs,
            'autres_blogs' => $autres_blogs
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $check = DB::table('gestion_activites')->select('id')->where('id', $id)->count();
        if ($check == 1) {
            $blog = DB::table('gestion_activites')->where('id', $id)->first();
            $id = $blog->id;
            $autres_blogs = DB::table('gestion_activites')->where('id', '!=', $id)->latest()->limit(4)->get();
            return view('blog', [
                'blog' => $blog,
                'autres_blogs' => $autres_blogs
            ]);
        } else {
            return view(
                'error',
                [
                    'error' => true,
                    'message' => 'Il semble que l\'article que vous recherchez n\'est pas disponible.'
                ]
            );
        }
    }
}

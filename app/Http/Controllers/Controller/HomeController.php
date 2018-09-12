<?php

namespace App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Post;
use App\Model\Category;

class HomeController extends Controller
{
    private $allFields = [
        "post.id_user",
        "title",
        "location",
        "time_create",
        "preview",
        "detail",
        "image",
        "post.id_cat",
        "post.id_user",
        "username",
        "fullname",
        "phone",
        "email",
        "avatar",
        "user.id_role",
        "name_role"
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newPosts = Post::select($this->allFields)
                            ->join('user', 'post.id_user','user.id_user')
                            ->join('role', 'role.id_role','user.id_role')
                            ->orderBy('time_create', 'desc')
                            ->limit(3)
                            ->get();

        $postByCategories = Category::get()->each(function($category){
            $category["posts"] = Post::select($this->allFields)
                                    ->join('user', 'post.id_user','user.id_user')
                                    ->join('role', 'role.id_role','user.id_role')
                                    ->where('id_cat', $category->id_cat)
                                    ->orderBy('time_create', 'desc')
                                    ->limit(2)
                                    ->get();
        });

        return view('public.index', compact('newPosts', 'postByCategories'));
    }

    /**
     * Search resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $listSearch =  $postByCategories = Category::get()->each(function($category) use ($keyword) {
            $category["posts"] = Post::select($this->allFields)
                                        ->join('user', 'post.id_user','user.id_user')
                                        ->join('role', 'role.id_role','user.id_role')
                                        ->where(function($query) use ($keyword){
                                            $query->where('title', 'like', '%'.$keyword.'%')
                                                    ->orWhere('location', 'like', '%'.$keyword.'%')
                                                    ->orWhere('preview', 'like', '%'.$keyword.'%')
                                                    ->orWhere('detail', 'like', '%'.$keyword.'%');
                                        })
                                        ->where('id_cat', $category->id_cat)
                                        ->orderBy('time_create', 'desc')
                                        ->limit(5)
                                        ->get();
        });

        return view('public.search', compact('listSearch', 'keyword'));
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
    }
}

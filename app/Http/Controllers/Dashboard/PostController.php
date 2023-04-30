<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use App\Trait\UploadTrait;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use UploadTrait;

    protected $post;

    public function __construct(Post $post)  // Construct For Models
    {
        $this->post = $post;
    }


    public function index()
    {
        // $this->authorize('view', $this->post); // Use View -> PostPolicy

        $posts = Post::all();
        return view('backend.Post.dashboard_post',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('backend.Post.dashboard_add_post',compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try{
            $comment ='';
            // Function To Save In Storage With Folder Name
            $image = $this->uploadfile($request,'post','image');

            Post::create([

                'title'=>
                [
                'en'=>$request->en_title,
                'ar'=>$request->ar_title,
                ],

                'content'=>
                [
                'en'=>$request->en_content,
                'ar'=>$request->ar_content,
                ],

                'slug'=>
                [
                'en'=>$request->en_slug,
                'ar'=>$request->ar_slug,
                ],
                'description'=>
                [
                'en'=>$request->en_description,
                'ar'=>$request->ar_description,
                ],
                'summary'=>
                [
                'en'=>$request->en_summary,
                'ar'=>$request->ar_summary,
                ],

                'user_id'=> auth()->user()->id,  // Return User Now to use in policy
                'comments'=>$comment,
                'category'=>$request->category_id,
                'subcategory'=>$request->subcategory_id,
                'image'=>$image,

            ]);

            session()->flash('add_post',__('backend/dashboard_message.Add Post Successfully'));
            return redirect()->route('post.index');

        }
        catch(\Exception $e){
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getSubcategory($id){
        $subcategory = SubCategory::where('category_id',$id)->pluck('title','id');
        return $subcategory;
    }


}

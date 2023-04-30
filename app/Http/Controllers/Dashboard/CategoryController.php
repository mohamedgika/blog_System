<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Trait\UploadTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use UploadTrait;

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }


    public function index()
    {
        $this->authorize('view',$this->category);

        // Relation Between Category And Sub Category
        $categories = Category::all();

        // $subcategories = Category::find($id)->subcategory;

        return view('backend.Category.dashboard_category',['categories'=>$categories]);
    }


    public function create()
    {
        $this->authorize('create',$this->category);
        return view('backend.Category.dashboard_add_category');
    }


    public function store(Request $request)
    {
        $this->authorize('update',$this->category);
        try{

            // Function To Save In Storage With Folder Name
            $image = $this->uploadfile($request,'category','image');

            Category::create([

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

                'image'=>$image,

            ]);

            session()->flash('add_catergory',__('backend/dashboard_message.Add Category Successfully'));
            return redirect()->route('category.index');

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
    public function edit(Request $request, $id)
    {
        $this->authorize('update',$this->category); // Secure Url

        Category::findorFail($id);

       try{
            // Function To Save In Storage With Folder Name
            $image = $this->uploadfile($request,'category','image');

           Category::where('id',$id)->update([

               'title'=>
               [
                'en'=>$request->en_title,
                'ar'=>$request->ar_title
               ],
               'slug'=>
               [
                'en'=>$request->en_slug,
                'ar'=>$request->ar_slug
               ],
               'content'=>
               [
                'en'=>$request->en_content,
                'ar'=>$request->ar_content
               ],
               'image'=>$image,

           ]);

           session()->flash('edit_user',__('backend/dashboard_message.Edit User Successfully'));
           return redirect()->route('category.index');

       }
       catch(\Exception $e){
           return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
       }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

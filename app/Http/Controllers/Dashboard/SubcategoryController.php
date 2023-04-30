<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use App\Trait\UploadTrait;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = SubCategory::all();
        return view('backend.Category.Sub_Category.dashboard_sub_category',['subcategories'=>$subcategories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.Category.Sub_Category.dashboard_add_sub_category',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{

            // Function To Save In Storage With Folder Name
            $image = $this->uploadfile($request,'sub_category','image');

            SubCategory::create([

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

                'category_id'=>$request->category_id,

                'image'=>$image,

            ]);

            session()->flash('add_catergory',__('backend/dashboard_message.Add Category Successfully'));
            return redirect()->route('subcategory.index');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getcategory($id){
        $categories = Category::where('category_id',$id)->pluck('title','id');
        return $categories;
    }

}

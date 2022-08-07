<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Mockery\Matcher\Subset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.pages.product.product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.pages.product.form-product', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Category::where('id', $request->categories_id)) {
            $categories = Category::where('id', $request->categories_id)->first();
            $categories->total_product +=  1;
            $categories->update();

            if ($request->sub_categories_id !== NULL) {
                $sub_categories = SubCategory::where('id', $request->sub_categories_id)->first();
                $sub_categories->total_product += 1;
                $sub_categories->update();
            }
        }

        $data = $request->all();

        if ($image = $request->file('images')) {
            $destinationPath = 'admin/img/product/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['images'] = $profileImage;
        }

        Product::create($data);

        return redirect()->route('admin.produk.index');
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
        $products = Product::findOrFail($id);
        $categories = Category::all();
        $sub_categories = SubCategory::where('categories_id', $products->categories_id)->get();

        return view('admin.pages.product.edit-product', compact('products', 'categories', 'sub_categories'));
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
        $data = $request->all();

        if ($image = $request->file('images')) {
            $destinationPath = 'admin/assets/images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['images'] = $profileImage;
        } else {
            unset($data['images']);
        }

        $products = Product::findOrFail($id);
        $products->update($data);

        return redirect()->route('admin.produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();

        return redirect()->route('admin.produk.index');
    }

    // Function Get Sub Category
    public function getSubCategory(Request $request)
    {
        if (SubCategory::where('categories_id', $request->categories_id)->exists()) {
            $sub_categories = SubCategory::where('categories_id', $request->categories_id)->get();
            echo "<option>Pilih Sub Category</option>";

            foreach ($sub_categories as $sub_category) {
                echo "<option value='" . $sub_category->id . "'>";
                echo $sub_category->sub_category;
                echo "</option>";
            }
        } else {
            echo "<option value=''>Sub Category Tidak Tersedia</option>";
        }
    }
}

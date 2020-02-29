<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $data = Product::latest()->paginate(5);
        return view('product', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'image'       => 'nullable|image|mimes:jpeg,bmp,png,jpg,svg|max:4096',
           'title'       => 'required|max:255',
           'option'      => 'required',
           'quantity'    => 'required',
           'price'       => 'required',
           'mobile'      => 'required',
           'description' => 'nullable'
       ]);

       $image = $request->file('image');
    
       $new_name = rand() . '.' . $image->getClientOriginalExtension();
       $image->move(public_path('images'), $new_name);
       $form_data = array(
        
           'title'       =>   $request->title,
           'option'      =>   $request->option,
           'quantity'    =>   $request->quantity,
           'price'       =>   $request->price,
           'description' =>   $request->description,
           'mobile'      =>   $request->mobile,
           'image'       =>   $new_name
       );
       
       Product::create($form_data);

       return redirect('products')->with('success', 'Data Added successfully.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::findOrFail($id);
        return view('products', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::findOrFail($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        $data = Product::find($id);
        if($image != '')
        {
            $data->update([
                'image'       => $request->$image,
                'title'       => $request->input('title'),
                'option'      => $request->input('option'),
                'quantity'    => $request->input('quantity'),
                'price'       => $request->input('price'),
                'mobile'      => $request->input('mobile'),
                'description' => $request->input('description')
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move_uploaded_file(public_path('images'), $image_name);
        }
        else
        {
            $data->update([
                'title'       => $request->input('title'),
                'option'      => $request->input('option'),
                'quantity'    => $request->input('quantity'),
                'price'       => $request->input('price'),
                'mobile'      => $request->input('mobile'),
                'description' => $request->input('description')
            ]);
        }

        $form_data = array(
            'title'       =>   $request->title,
            'option'      =>   $request->option,
            'quantity'    =>   $request->quantity,
            'price'       =>   $request->price,
            'description' =>   $request->description,
            'mobile'      =>   $request->mobile,  
            'image'       =>   $image_name
        );
  
        Product::whereId($data)->update($form_data);

        return redirect('products')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::findOrFail($id);
        $data->delete();

        return redirect()->back();
    }
}

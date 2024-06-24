<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\UserProfile;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $product = Product::orderBy('created_at', 'DESC')->get();

        return view('products.index', compact('product'));
    }

    public function allprofiles()
    {
        $users =  UserProfile::orderBy('created_at', 'DESC')->get();
        return view('adminpages.profiles', [
            'users' => $users,
        ]);
    }
    public function editprofiles(string $id)
    {

        $userProfile = UserProfile::findOrFail($id);
        // dd($userProfile);

        return view('adminpages.edit', compact('userProfile'));
    }
    public function updateprofiles(Request $request, $id)
    {
        $request->validate([
            'fullname' => 'nullable|string',
            'gender' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'height' => 'nullable|integer',
            'religion' => 'nullable|string',
            'city' => 'nullable|string',
            'mobile_number' => 'nullable|string',
            'education' => 'nullable|string',
            'occupation' => 'nullable|string',
            'annual_income' => 'nullable|integer',
            'profile_pic' => 'nullable|image|max:2048',
            'Payment' => 'nullable|string',
        ]);
    
        $userProfile = UserProfile::findOrFail($id);
        $userProfile->fullname = $request->input('fullname');
        $userProfile->gender = $request->input('gender');
        $userProfile->date_of_birth = $request->input('date_of_birth');
        $userProfile->height = $request->input('height');
        $userProfile->religion = $request->input('religion');
        $userProfile->city = $request->input('city');
        $userProfile->mobile_number = $request->input('mobile_number');
        $userProfile->education = $request->input('education');
        $userProfile->occupation = $request->input('occupation');
        $userProfile->annual_income = $request->input('annual_income');
        $userProfile->Payment = $request->input('Payment');
    
        if ($request->hasFile('profile_pic')) {
            $profilePicPath = $request->file('profile_pic')->store('profile_pics', 'public');
            $userProfile->profile_pic = $profilePicPath;
        }
    
        $userProfile->save();
    
        return redirect()->route('admin.editprofiles', $userProfile->id)->with('success', 'Profile updated successfully!');
    
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->route('admin/products')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $product->update($request->all());

        return redirect()->route('admin/products')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->route('admin/products')->with('success', 'product deleted successfully');
    }
}

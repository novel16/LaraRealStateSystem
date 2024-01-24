<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyFormRequest;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;

class PropertyController extends Controller
{
    public function index(){

        return view('admin.property.create-property');

    }

    public function store(PropertyFormRequest $request)
    {
        
        try {
            //code...
            $validatedData = $request->validated();

            $property = new Property;
            $property->property_name = $validatedData['property_name'];
            $property->property_price = $validatedData['property_price'];
            $property->deposit_amount = $validatedData['deposit_amount'];
            $property->property_address = $validatedData['property_address'];

            $property->offer_type = $validatedData['offer_type'];
            $property->property_type = $validatedData['property_type'];
            $property->property_status = $validatedData['property_status'];
            $property->furnished_status = $validatedData['furnished_status'];
            $property->bhk = $validatedData['bhk'];
            $property->bedrooms = $validatedData['bedrooms'];
            $property->bathrooms = $validatedData['bathrooms'];
            $property->balconies = $validatedData['balconies'];
            $property->carpet_area = $validatedData['carpet_area'];
            $property->property_age = $validatedData['property_age'];
            $property->total_floor = $validatedData['total_floor'];
            $property->room_floor = $validatedData['room_floor'];
            $property->loan = $validatedData['loan'];
            $property->description = $validatedData['description'];


            $property->c_lift = $request->c_lift == true ? '1':'0';
            $property->c_guard = $request->c_guard == true ? '1':'0';
            $property->c_playground = $request->c_playground == true ? '1':'0';
            $property->c_garden = $request->c_garden == true ? '1':'0';
            $property->c_watersupply = $request->c_watersupply == true ? '1':'0';
            $property->c_power = $request->c_power == true ? '1':'0';

            $property->c_parking = $request->c_parking == true ? '1':'0';
            $property->c_gym = $request->c_gym == true ? '1':'0';
            $property->c_shopping = $request->c_shopping == true ? '1':'0';
            $property->c_hospital = $request->c_hospital == true ? '1':'0';
            $property->c_school = $request->c_school == true ? '1':'0';
            $property->c_market = $request->c_market == true ? '1':'0';


            if($request->hasFile('image_1'))
            {
                $file = $request->file('image_1');

                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;

                $file->move('uploads/property/',$filename);
                $property->image_1 = $filename;
            }

            $property->save();
            return redirect('admin/dashboard')->with('message', 'Property added successfully');





        } catch (\Throwable $th) {
            // Log the exception
            return response()->json(['error' =>$th->getMessage()], 500);

            // Handle the exception or perform additional actions as needed
            // For example, you might want to return a response with an error message
            
        }



    }
}

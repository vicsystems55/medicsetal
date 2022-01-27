<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package;

class PackageController extends Controller
{
    //

    public function create(Request $request)
    {
        # code...
        $package = Package::create([
                'name' => $request->name,
                'description' => $request->description,
                'duration' => $request->duration,
                'status' => $request->status,
                'featured_image' => $request->featured_image,
        ]);

        return $package;
    }

    public function update(Request $request)
    {
        # code...
        $package = Package::where('id', $request->id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'duration' => $request->duration,
                'status' => $request->status,
                'featured_image' => $request->featured_image,
        ]);

        return $package;
    }


    public function delete(Request $request)
    {
        # code...
        $package = Package::where('id', $request->id)->delete();

        return $package;
    }

    public function deactivate(Request $request)
    {
        # code...
        
        $package = Package::where('id', $request->id)->udpdate([
            'status' => 'deactivated'
        ]);

        return $package;

    }


    public function activate(Request $request)
    {
        # code...
        $package = Package::where('id', $request->id)->udpdate([
            'status' => 'active'
        ]);

        return $package;
        
    }

    public function details(Request $request)
    {
        # code...
        $package = Package::where('id', $request->package_id)->first();

        return $package;
        
    }

    public function packages(Request $request)
    {
        # code...
        if ($request->package_id) {
            # code...

                    # code...
        $package = Package::where('id', $request->package_id)->first();

        return $package;


        }else{

            $packages = Package::latest()->get();

            return $packages;


        }
        
    }
}

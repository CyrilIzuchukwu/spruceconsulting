<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //

    public function add_service()
    {
        return view('service.index');
    }


    public function create_service(Request $request)
    {
        try {
            $request->validate([
                'service_name' => 'required',
                'content' => 'required',
                'image' => 'required|image|max:5000',
            ]);

            // Save the main property image
            if ($request->hasFile('image')) {
                $serviceImage = $request->file('image');
                $servicImageName = time() . '.' . $serviceImage->getClientOriginalExtension();
                $serviceImage->move(public_path('service_images'), $servicImageName);
            }

            $service_name = $request->service_name;
            $content = $request->content;

            $trainigService = Service::updateOrCreate(
                [
                    'service_name' => $service_name,
                    'content' => $content,
                    'image' => $servicImageName, // Save the image name instead of the object
                ]
            );

            $trainigService->save();

            return redirect()->route('service')->with('success', 'Service created successfully.');
        } catch (\Exception $e) {
            // Log::error($e);
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }


    public function service()
    {
        $servicess = Service::orderBy('created_at', 'desc')->Paginate(5);

        return view('service.service', compact('servicess'));
    }

    public function delete_service($id)
    {
        $data = Service::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Service deleted');
    }


    public function edit_service($id)
    {
        $data = Service::find($id);
        return view('service.edit', compact('data'));
    }

    public function update_service(Request $request, $id)
    {
        try {
            $request->validate([
                'service_name' => 'required',
                'content' => 'required',
                'image' => 'nullable|image|max:5000',
            ]);

            // Find the testimonial by ID
            $service = Service::find($id);

            if (!$service) {
                return redirect()->back()->with('error', 'Service not found.');
            }

            // Save the new client logo image if it is provided
            if ($request->hasFile('image')) {
                // Delete the old client logo if it exists
                if (file_exists(public_path('service_images/' . $service->image))) {
                    unlink(public_path('service_images/' . $service->image));
                }

                $serviceImage = $request->file('image');
                $serviceImageName = time() . '.' . $serviceImage->getClientOriginalExtension();
                $serviceImage->move(public_path('service_images'), $serviceImageName);
                $service->image = $serviceImageName;
            }

            $service->service_name = $request->service_name;
            $service->content = $request->content;

            $service->save();

            return redirect()->route('service')->with('success', 'Service updated successfully.');
        } catch (\Exception $e) {
            // Log::error($e);
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }
}

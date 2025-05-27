<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use App\Http\Requests\SlideRequest;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::latest()->get();
        return view('admin.slides.index', compact('slides'));
    }

    public function create()
    {
        return view('admin.slides.create');
    }

    public function store(SlideRequest $request)
    {
        Slide::create($request->validated());
        return redirect()->route('admin.slides.index')
                         ->with('success','Tạo slide thành công!');
    }

    public function edit(Slide $slide)
    {
        return view('admin.slides.edit', compact('slide'));
    }

    public function update(SlideRequest $request, Slide $slide)
    {
        $slide->fill($request->validated());
        $slide->save();

        return redirect()
            ->route('admin.slides.index')
            ->with('success', 'Cập nhật slide thành công.');
    }



    public function destroy(Slide $slide)
    {
        if ($slide->image && Storage::disk('public')->exists($slide->image)) {
            Storage::disk('public')->delete($slide->image);
        }

        $slide->delete();

        return redirect()->route('admin.slides.index')->with('success', 'Xoá slide thành công.');
    }

    public function toggleStatus(Request $request, Slide $slide)
    {
        $slide->status = $request->boolean('status');
        $slide->save();

        return response()->json(['success' => true]);
    }

    /**
     * Validate form input.
     */
    protected function validateData(Request $request, $isCreate = true)
    {
        return $request->validate([
            'title' => 'required|string|max:255',
        // Create bắt buộc, Update chỉ khi có thì phải là string
            'image' => $isCreate
            ? 'required|string'
            : 'sometimes|string',
            'status' => 'nullable|boolean',
        ]);
    }

}

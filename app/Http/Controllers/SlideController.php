<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        dd($request->all());
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
        ]);

        $data['status'] = $request->boolean ? 1 : 0;

        $data['image'] = $request->file('image')->store('slides', 'public');

        Slide::create($data);

        return redirect()->route('admin.slides.index')->with('success', 'Tạo slide thành công!');
    }

    public function edit(Slide $slide)
    {
        return view('admin.slides.edit', compact('slide'));
    }

    public function update(Request $request, Slide $slide)
    {
        $data = $this->validateData($request, false);

        if ($request->hasFile('image')) {
            if ($slide->image && Storage::disk('public')->exists($slide->image)) {
                Storage::disk('public')->delete($slide->image);
            }
            $data['image'] = $request->file('image')->store('slides', 'public');
        }

        $data['status'] = $request->has('status');
        $slide->update($data);

        return redirect()->route('admin.slides.index')->with('success', 'Cập nhật slide thành công.');
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
            'image' => $isCreate ? 'required|image|max:2048' : 'nullable|image|max:2048',
            'status' => 'nullable|boolean',
        ]);
    }
}

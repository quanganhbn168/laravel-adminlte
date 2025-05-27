<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    // app/Http/Controllers/UploadController.php

    public function store(Request $request)
    {
        $request->validate([
            // Bây giờ file gửi lên nằm ở key 'image'
            'image'  => 'required|file|mimes:jpg,png,gif,svg,webp|max:5120',
            'folder' => 'nullable|string',
        ]);

        $folder = $request->input('folder', 'uploads');
        // lưu vào storage/app/public/{folder}
        $path = $request->file('image')->store($folder, 'public');

        // TRẢ VỀ PLAIN-TEXT path (không JSON) để FilePond hiểu luôn
        return response($path, 200);
    }

}

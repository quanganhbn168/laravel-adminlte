<?php
// app/Traits/HasUploadableFile.php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

trait HasUploadableFile
{
    /**
     * Model phải định nghĩa method này, trả về mảng:
     *   'thuộc_tính' => 'thư_mục_lưu_trên storage/public'
     */
    abstract protected static function uploadableFiles(): array;

    public static function bootHasUploadableFile()
    {
        static::saving(function ($model) {
            foreach ($model->uploadableFiles() as $attribute => $folder) {
                // 1) Nếu có upload file input
                if (request()->hasFile($attribute)) {
                    $old = $model->getOriginal($attribute);
                    if ($old && Storage::disk('public')->exists($old)) {
                        Storage::disk('public')->delete($old);
                    }
                    /** @var UploadedFile $file */
                    $file = request()->file($attribute);
                    $model->{$attribute} = $file->store($folder, 'public');
                    continue;
                }

                // 2) Nếu FilePond trả về string (URL hoặc relative path)
                if (request()->filled($attribute) && is_string(request()->input($attribute))) {
                    $input = request()->input($attribute);
                    $path  = parse_url($input, PHP_URL_PATH) ?: $input;
                    $relative = preg_replace('#^/storage/#', '', $path);

                    $old = $model->getOriginal($attribute);
                    if ($old && $relative !== $old && Storage::disk('public')->exists($old)) {
                        Storage::disk('public')->delete($old);
                    }
                    $model->{$attribute} = $relative;
                    continue;
                }

                // 3) Nếu không submit field này → giữ nguyên (không làm gì)
            }
        });
    }
}

<?php
// app/Models/Slide.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasUploadableFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slide extends Model
{
    use HasFactory, HasUploadableFile;

    protected $fillable = ['title', 'image', 'status'];
    protected $casts    = ['status' => 'boolean'];

    /**
     * Trả về map attribute → folder.
     */
    protected static function uploadableFiles(): array
    {
        return [
            'image' => 'slides',
        ];
    }
}

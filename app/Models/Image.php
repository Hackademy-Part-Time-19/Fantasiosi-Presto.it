<?php

namespace App\Models;


use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{

    protected $fillable = ['path'];
    use HasFactory;

    public function announcement(){
        return $this->belongsTo(Announcement::class);
    }

    public static function getUrlByFilePath($filePath, $w= null, $h= null){
        if(!$w && !$h){
            return Storage::url($filePath);
        }

        $path = dirname($filePath);
        $fileName = basename($filePath);
        $file = "{$path}/crop_{$w}x{$h}_{$fileName}";

        return Storage::url($file);
    }

    public function getFilePath($w = null, $h= null){
    /* return Image::getUrl($this->path, $w, $h); */
    $fileName = substr($this->path, 16);
    return asset("storage/announcements/{$this->announcement->id}/crop_{$w}x{$h}_{$fileName}");

}


}

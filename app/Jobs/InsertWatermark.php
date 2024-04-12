<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Spatie\Image\Image as SpatieImage;
use Spatie\Image\Manipulations;

class InsertWatermark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $path;
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->path);
        if (!$i) {
            return;
        }

        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents(storage_path('app/public/' . $i->path));

        $image = SpatieImage::load($srcPath);

        $image->watermark(base_path('resources/img/logo.png'))
            ->watermarkPosition(Manipulations::POSITION_TOP_RIGHT)
            ->watermarkFit(Manipulations::FIT_CONTAIN)
            ->watermarkPadding(10, 0, Manipulations::UNIT_PERCENT)
            ->watermarkOpacity(60)
            ->watermarkHeight(20, Manipulations::UNIT_PERCENT)
            ->watermarkWidth(20, Manipulations::UNIT_PERCENT);


        $image->save($srcPath);
    }
}

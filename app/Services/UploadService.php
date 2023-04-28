<?php

namespace App\Services;

use Carbon\Carbon;

class UploadService
{
    /**
     * Upload image
     */
    public function uploadImage($image, $nameFolder)
    {
        $directory = 'public/uploads/' . $nameFolder . '/';
        $image_full_name = $image->getClientOriginalName();
        $image_name = current(explode('.', $image_full_name));
        $new_image = $image_name . '_' . Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();
        $image->move($directory, $new_image);

        return $directory . $new_image;
    }

    /**
     * Upload multi image
     */
    public function uploadMultiImage($images, $nameFolder)
    {
        $result = [];
        $directory = 'public/uploads/' . $nameFolder . '/';
        if (!empty($images)) {
            foreach ($images as $image) {
                $image_full_name = $image->getClientOriginalName();
                $image_name = current(explode('.', $image_full_name));
                $new_image = $image_name . '_' . Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();
                $image->move($directory, $new_image);
                $result[] =  $directory . $new_image;
            }
        }

        return $result;
    }
}

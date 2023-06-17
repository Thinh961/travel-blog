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
        $directory = 'uploads/' . $nameFolder . '/';
        $path = 'public/' . $directory;
        $image_full_name = $image->getClientOriginalName();
        $image_name = current(explode('.', $image_full_name));
        $new_image = $image_name . '_' . Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();
        $image->move($path, $new_image);

        return $directory . $new_image;
    }

    /**
     * Upload multi image
     */
    public function uploadMultiImage($images, $nameFolder)
    {
        $result = [];
        $directory = 'uploads/' . $nameFolder . '/';
        $path = 'public/' . $directory;
        if (!empty($images)) {
            foreach ($images as $image) {
                $image_full_name = $image->getClientOriginalName();
                $image_name = current(explode('.', $image_full_name));
                $new_image = $image_name . '_' . Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();
                $image->move($path, $new_image);
                $result[] =  $directory . $new_image;
            }
        }

        return $result;
    }
}

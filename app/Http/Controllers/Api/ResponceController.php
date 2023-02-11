<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class ResponceController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    function sendResponse(int $code, string $msg, $data = null, int $status = 1, $description = ''): object
    {
        return (object) array(
            'status'        => $status,
            'success'       => true,
            'code'          => $code,
            'message'       => $msg,
            'description'   => $description,
            'data'          => $data,
        );
    }

    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    function sendError($error, $errorMessages = [], $code = 200)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }


    /**
     * base64 image upload
     *
     * @param string $img
     * @param string $path
     * @return void
     */
    function uploadBase64FileToPublic($img, string $path)
    {

        if ($img && $path) {
            $folderPath = $path;
            if (!File::isDirectory($folderPath)) {
                File::makeDirectory($folderPath, 0777, true, true);
            }
            $image_parts = explode(";base64,", $img);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $fileName = uniqid() . '.' . $image_type;
            $filePath = $folderPath . '/' . $fileName;
            file_put_contents($filePath, $image_base64);

            return $filePath;
        } else {
            return null;
        }
    }
}

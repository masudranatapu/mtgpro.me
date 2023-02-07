<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

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

    public function uploadBase64ToImage($file, $file_name, $file_prefix)
    {
        $file_path = sprintf("assets/uploads/avatar/");
        $file_name = sprintf('%s.%s', $file_name, $file_prefix);
        $upload_path = public_path() . '/' . $file_path;
        if (stripos($file, 'data:image/jpeg;base64,') === 0) {
            $img = base64_decode(str_replace('data:image/jpeg;base64,', '', $file));
        } else if (stripos($file, 'data:image/png;base64,') === 0) {
            $img = base64_decode(str_replace('data:image/png;base64,', '', $file));
        } else {
            return false;
        }
        $result = file_put_contents($upload_path . $file_name, $img);
        return $file_path . $file_name;
    }

}

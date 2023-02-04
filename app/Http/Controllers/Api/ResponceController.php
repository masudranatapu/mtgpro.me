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
}

<?php
namespace App\Utils;

class ApiResponse {
    public static function validationError($errors)
    {
        $newErrors = [];
        foreach($errors->toArray() as $field => $msg) {
            $newErrors[$field] = $msg[0];
        }

        return [
            'status' => 'error',
            'message' => 'error validation',
            'validationErrors' => $newErrors
        ];
    }

    public static function error($message) {
        return [
            'status' => 'error',
            'message' => $message
        ];
    }

    public static function success($data, $message = "") {
        return [
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ];
    }
}
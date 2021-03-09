<?php
namespace App\Utils;

class CRUDResponse {
    public static function successCreate($postfixMsg) {
        return [
            'success' => "Berhasil menambah data $postfixMsg"
        ];
    }
    
    public static function successUpdate($postfixMsg) {
        return [
            'success' => "Berhasil update data $postfixMsg"
        ];
    }

    public static function successDelete($postfixMsg) {
        return [
            'success' => "Berhasil menghapus data $postfixMsg"
        ];
    }

    public static function successCreateNotif($postfixMsg) {
        return [
            'message' => "👍 Berhasil menambah data $postfixMsg", 
            'alert-type' => 'success'
        ];
    }

    public static function successUpdateNotif($postfixMsg) {
        return [
            'message' => "👍 Berhasil update data $postfixMsg", 
            'alert-type' => 'success'
        ];
    }

    public static function successDeleteNotif($postfixMsg) {
        return [
            'message' => "👍 Berhasil menghapus data $postfixMsg", 
            'alert-type' => 'success'
        ];
    }

    public static function errorInputNotif($postfixMsg) {
        return [
            'message' => "terjadi kesalahan, mohon periksa kembali inputan data $postfixMsg",
            'alert-type' => 'error'
        ];
    }
}
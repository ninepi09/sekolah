<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Superadmin\Kategori;
use App\Utils\ApiResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Request $req) {
        $data = $req->all();

        $categories = Kategori::orderBy('name')->get();
        return response()->json(ApiResponse::success($categories));
    }
}

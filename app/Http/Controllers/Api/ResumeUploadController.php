<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use http\Client\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;

class ResumeUploadController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fileName' => "required|mimes:pdf",
            'uploadedBy' => "required|max:256",
            'S30bjectKey' => "nullable|max:256",
        ]);

        if ($validator->fails()) {
            return response()->json([
                "error" => $validator->errors()
            ]);
        };

        if ($request->input('file')) {

        }
    }
}

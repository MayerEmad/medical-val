<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    // return Profile Collection
    public function getProfile()
    {
        return response()->json(['message' => 'Api.ProfileController.getProfile']);
    }

    // insert Profile Data
    public function editProfile()
    {
        return response()->json(['message' => 'Api.ProfileController.editProfile']);
    }

    // Update  Profile Data
    public function updateProfile()
    {
        return response()->json(['message' => 'Api.ProfileController.updateProfile']);
    }
}

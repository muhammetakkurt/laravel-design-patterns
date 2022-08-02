<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(
            data: UserResource::collection(User::all()),
            status: Response::HTTP_OK
        );
    }

    public function show(User $user): JsonResponse
    {
        return response()->json(
            data: new UserResource($user),
            status: Response::HTTP_OK
        );
    }
}

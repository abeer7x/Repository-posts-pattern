<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepositoryInterface;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{

    protected $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return $this->success($this->service->getAll());
    }

    public function store(StorePostRequest $request)
    {
        return response()->json($this->service->create($request->validated()), 201);
    }

    public function show($id)
    {
        return $this->success($this->service->get($id));
    }

    public function update(UpdatePostRequest $request, $id)
    {
        return $this->success($this->service->update($id, $request->validated()));
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return $this->success(null, 204);
    }
}



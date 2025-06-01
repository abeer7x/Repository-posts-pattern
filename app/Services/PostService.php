<?php

namespace App\Services;

use App\Repositories\PostRepositoryInterface;

class PostService
{
    /**
     * Create a new class instance.
     */
    protected $repo;

    public function __construct(PostRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function getAll()
    {
        return $this->repo->all();
    }

    public function get($id)
    {
        return $this->repo->find($id);
    }

    public function create(array $data)
    {
        $post = $this->repo->create($data);
        return $post;
    }

    public function update($id, array $data)
    {
        return $this->repo->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repo->delete($id);
    }
}

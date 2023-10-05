<?php

namespace Modules\MyModule\Http\Controllers\Api;

use App\Abstracts\Http\ApiController;
use Modules\MyModule\Http\Requests\User as Request;
use App\Http\Resources\Auth\User as Resource;
use Modules\MyModule\Jobs\CreateUser;

class Users extends ApiController
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $user = $this->dispatch(new CreateUser($request));

        return new Resource($user);
    }
}

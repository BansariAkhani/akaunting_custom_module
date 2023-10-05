<?php

namespace Modules\MyModule\Jobs;

use App\Abstracts\Job;
use App\Interfaces\Job\HasOwner;
use App\Interfaces\Job\HasSource;
use App\Interfaces\Job\ShouldCreate;
use App\Models\Auth\User;

class CreateUser extends Job implements HasOwner, HasSource, ShouldCreate
{
    public function handle(): User
    {
        \DB::transaction(function () {
            $this->model = User::create($this->request->all());
        });

        return $this->model;
    }
}

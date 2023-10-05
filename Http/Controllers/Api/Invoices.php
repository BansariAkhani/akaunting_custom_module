<?php

namespace Modules\MyModule\Http\Controllers\Api;

use App\Abstracts\Http\ApiController;
use App\Http\Requests\Document\Document as Request;
use App\Http\Resources\Document\Document as Resource;
use App\Jobs\Document\CreateDocument;

class Invoices extends ApiController
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
        $invoice = $this->dispatch(new CreateDocument($request));

        return new Resource($invoice);

    }
}

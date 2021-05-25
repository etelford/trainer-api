<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrainerRequest;
use App\Models\Trainer;

class TrainersController extends Controller
{
    /**
     * Get a Trainer from its ID
     *
     * @return response
     */
    public function show($id)
    {
        $trainer = Trainer::find($id);

        if (is_null($trainer)) {
            return response(sprintf("Trainer id '%s' does not exist.", $id), 404);
        }

        return $trainer;
    }

    /**
     * Create a Trainer
     *
     * @return response
     */
    public function store(StoreTrainerRequest $request)
    {
        $trainer = Trainer::create([
            'email' => request('email'),
            'phone' => request('phone'),
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
        ]);

        return response($trainer);
    }
}

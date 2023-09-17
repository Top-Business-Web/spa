<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class CustomValidationServiceProvider extends ServiceProvider
{
    /**
     * Register the application's custom validation rules.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->booted(function () {
            // Define the 'existing_image' custom validation rule
            Validator::extend('existing_image', function ($attribute, $value, $parameters, $validator) {
                $model = app($parameters[0]);
                $imageField = $parameters[1] ?? 'image';

                if (empty($value)) {
                    // If no new image is provided, check if the model has an existing image.
                    $id = $validator->getData()['id'] ?? null;
                    if ($id) {
                        $existingModel = $model->findOrFail($id);
                        return !empty($existingModel->{$imageField});
                    }
                    return false;
                }

                return true;
            });
        });
    }
}

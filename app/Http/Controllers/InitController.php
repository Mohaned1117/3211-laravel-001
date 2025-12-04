<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class InitController extends Controller
{
    function models()
    {
        $models = [
            'User',
            'PostStatus',
            'ReactionType',
            'Post',
            'Comment',
            'Reply',
            'Reaction'
        ];
        foreach ($models as $model) {
            // php artisan make:model Post -a
            Artisan::call('make:model', ['name' => $model, '-a' => true]);
            sleep(1);
        }
    }

    function seed()
    {
        Artisan::call('db:seed');
    }

    function dbFresh()
    {
        Artisan::call('migrate:fresh');
    }

    function dbFreshSeed()
    {
        Artisan::call('migrate:fresh', ['--seed' => true]);
    }
}

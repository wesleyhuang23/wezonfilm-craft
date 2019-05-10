<?php

use craft\elements\Entry;
use craft\elements\GlobalSet;
use craft\helpers\UrlHelper;

// function requireLogin(){
//     $currentUser = Craft::$app->user->getIdentity();

//     if(!$currentUser){
//         throw new \yii\web\ForbiddenHttpException("Unauthorized access. Please access with an authenticated session.");
//     }
// }

function requireLogin(){
    if(Craft::$app->user->getIdentity()){
        // already authenticated
    } else {
        $loginName = Craft::$app->request->getQueryParam('loginName');
        $password = Craft::$app->request->getQueryParam('password');

        $user = Craft::$app->getUsers()->getUserByUsernameOrEmail($loginName);

        if(!$user){
            throw new \yii\web\ForbiddenHttpException('access denied');
        }

        if(!$user->authenticate($password)){
            throw new \yii\web\ForbiddenHttpException('access denied');
        }
    }
}

return [
    'defaults' => [
        'elementType' => Entry::class,
        'elementsPerPage' => 10,
        'pageParam' => 'pg',
        'transformer' => function(Entry $entry) {
            return [
                'title' => $entry->title,
                'id' => $entry->id,
                'url' => $entry->url,
            ];
        },
    ],

    'endpoints' => [
        'reviews.json' => function() {
            requireLogin();
            return [
                'elementType' => Entry::class,
                'criteria' => ['section' => 'reviews'],
                'transformer' => function(Entry $entry) {
                    return [
                        'title' => $entry->title,
                        'url' => $entry->url,
                        'handle' => $entry->slug,
                        'jsonUrl' => UrlHelper::url("project/{$entry->id}.json"),
                        'summary' => $entry->body,
                    ];
                },
            ];
        },
        'reviews/<slug:{slug}>.json' => function($slug) {
            requireLogin();
            return [
                'elementType' => Entry::class,
                'criteria' => ['slug' => $slug],
                'one' => true,
                'transformer' => function(Entry $entry) {
                    // Create an array of all the photo URLs

                    return [
                        'title' => $entry->title,
                        'url' => $entry->url,
                        'poster' => $entry->poster[0],
                        'movieId' => $entry->moviedbid,
                        'body' => $entry->body,
                    ];
                },
            ];
        },
    ]
];
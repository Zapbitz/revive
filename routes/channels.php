<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('chat', function ($user) {
    return ['name'=>$user->name];
});

// Broadcast::channel('Chat.{client_id}.{doctor_id}', function ($user, $client_id , $doctor_id) {
//     return $user->id == $doctor_id;
// });


// Broadcast::channel('Online', function ($user) {
//     return $user;
// });

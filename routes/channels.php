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

// "If the user is not authenticated, channel authorization is automatically denied
// and the authorization callback is never executed." - Laravel docs

Broadcast::channel('units', function () {
    return true;
});

Broadcast::channel('requests', function () {
    return true;
});

<?php

// FIXME - wtfbbq
use LibreNMS\Authentication\Auth;

if (Auth::user()->hasGlobalRead() || $auth) {
    $id    = $vars['id'];
    $title = generate_device_link($device);
    $auth  = true;
}

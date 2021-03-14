<?php

class HomeHandler {
    function get() {
        include(CONTROLLER_PATH . '/home.php');
    }
}

Toro::serve(array(
    "/" => "HomeHandler",
));
<?php

    use Velocity\Velocity;

    if (! function_exists('velocity')) {
        function velocity()
        {
            return app()->make(Velocity::class);
        }
    }
?>
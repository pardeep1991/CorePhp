<?php

    class connection{

        function mysqliConnection () {

            //$link = mysqli_connect("localhost", "naksham_asia", "1amarjit*", "naksham_blackjack");
            $link = mysqli_connect("localhost", "root", "", "testing");
            if (!$link) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
            return $link;
        }
    }
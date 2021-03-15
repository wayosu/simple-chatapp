<?php
    $conn = new mysqli("localhost", "root", "", "chatapp");

    if (!$conn) {
        echo "Error: " . $conn->connect_error();
    }
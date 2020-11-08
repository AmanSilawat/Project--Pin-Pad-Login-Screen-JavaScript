<?php

    if ($_POST['pincode'] === '1234') {
        // set response status code
        http_response_code(200);
    } else {
        http_response_code(401);
    }

?>
<?php
    $emails_location = "../data/emails.json";

    if (!file_exists($emails_location))
        file_put_contents($emails_location, "");
    $old_data = file_get_contents($emails_location);
    if ($old_data)
    {
        $new_data = json_decode($old_data, true);
        array_push($new_data, $_GET['email']);
    }
    else {
        $new_data = array("0" => $_GET['email']);
    }
    file_put_contents($emails_location, json_encode($new_data));
?>
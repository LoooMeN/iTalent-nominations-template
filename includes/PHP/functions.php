<?php
    header('Content-Type: text/plain; charset=utf-8');
    print_r(json_decode(file_get_contents('../data/settings.json'), true));
?>
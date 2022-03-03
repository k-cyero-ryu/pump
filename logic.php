<?php
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'on':
                On();
                break;
            case 'off':
                select();
                break;
        }
    }

    function On() {
        echo "The select function is called.";
        exit;
    }

    function Off() {
        echo "The insert function is called.";
        exit;
    }
?>
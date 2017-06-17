<?php

    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['telnum']) && isset($_POST['emailid']) && isset($_POST['message']))
    {
        if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['telnum']) && !empty($_POST['emailid'])!empty($_POST['message']))
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $telnum = $_POST['telnum'].$_POST['areacode'];
            $emailid = $_POST['emailid'];
            $subject = 'Contact form Submitted';
            if(@mail($emailid, subject, $body, $headers))
            {
                echo 'We will contact you soon in!';
            }
            else
            {
                echo 'There was some problem connecting to server!';
            }
        }
        else
        {
            echo "Fields cannot be left Blank..Please Fill in all Details."
        }
    }

?>
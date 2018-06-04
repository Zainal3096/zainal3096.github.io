<?php
    $site_key = '6LdN21wUAAAAAFr7B4J_mjdCs7Vw9LlHpYpdt3oO'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
    $secret_key = '6LdN21wUAAAAACmhK9Z8-UC61ujeUpfkjd6Ug7zy'; // Diisi dengan secret_key API Google reCapthca yang sobat miliki
 
    if (isset($_POST['submit']))
    {
        if(isset($_POST['g-recaptcha-response']))
        {
            $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
            $response = @file_get_contents($api_url);
            $data = json_decode($response, true);
 
            if($data['success'])
            {
                $comment = $_POST['komentar'];
                // proses penyimpananan dan lain-lain disini
                $success = true;
            }
            else
            {
                $success = false;
            }
        }
        else
        {
            $success = false;
        }
    }
?>
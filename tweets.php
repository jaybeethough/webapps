<?php

require_once 'php/twitter.class.php';

//Twitter OAuth Settings, enter your settings here:
$CONSUMER_KEY = 'g4uvqTI8MVXks8ao4oh2ariuH';
$CONSUMER_SECRET = 'hF5HMkIDF0T9HrS7PNCD6gDVaPzLtATA81ZxMm2cJ0GoGaVL3B';
$ACCESS_TOKEN = '929862886964563968-mQboKDICCVXkPH1pqLgtT9XPArmcMSK';
$ACCESS_TOKEN_SECRET = 'xwtEp9ECiTbaq5kfWdLwFVXFcAEbAwtdRqbINdvEL0oq4';

$twitter = new Twitter($CONSUMER_KEY, $CONSUMER_SECRET, $ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);

// retrieve data
$q = $_POST['q'];
$count = $_POST['count'];
$api = $_POST['api'];

// api data
$params = array(
    'screen_name' => $q,
    'q' => $q,
    'count' => 20,
  'includes_rts' => true
);

$results = $twitter->request($api, 'GET', $params);

// output as JSON
echo json_encode($results);
?>
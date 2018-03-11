<?php

include 'settings.php';

date_default_timezone_set($timezone); // Sets timezone here

$team_key = "frc" . $team;

function teamData(){
    global $team_key;
    $data = api('https://www.thebluealliance.com/api/v3/team/' . $team_key);
    return $data;
}

$city = teamData()['city'];
$state = teamData()['state_prov'];

function api($url){
    global $tba_api_key;
    $opts = array(
      'http'=>array(
        'method'=>"GET",
        'header'=>"X-TBA-Auth-Key:" . $tba_api_key
      )
    );
    
    $context = stream_context_create($opts);
    
    // Open the file using the HTTP headers set above
    $file = file_get_contents($url, false, $context);
    return json_decode($file, true);
}

function events(){
    global $team_key;
    $year = date('Y');
    $data = api('https://www.thebluealliance.com/api/v3/team/' . $team_key . '/events/' . $year);
    return $data;
}

function eventData($key){
    $data = api('https://www.thebluealliance.com/api/v3/event/' . $key);
    return $data;
}

function current_event(){
    
    $data = events();
    $key = "";
    
    foreach($data as $event){
        if(strtotime($event['start_date']) < time() && (strtotime($event['end_date'])+(60*60*24)) > time()){
            $key = $event['key'];
        }
    }
    
    if(empty($key)){
        return false;
    }else{
        return $key;
    }
    
    //returns false if not during an active game, else event key
    
}

function weather($value){
    $event = current_event();
    if($event != false){
        switch($value){
            case 'zip':
                return eventData($event)['postal_code'];
                break;
            case 'city':
                return eventData($event)['city'];
                break;
            case 'state':
                return eventData($event)['state_prov'];
                break;
        }
        
    }else{
        switch($value){
            case 'zip':
                return teamData($event)['postal_code'];
                break;
            case 'city':
                return teamData($event)['city'];
                break;
            case 'state':
                return teamData($event)['state_prov'];
                break;
        }
    }
}



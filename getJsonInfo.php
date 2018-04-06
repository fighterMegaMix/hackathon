<?php

function getJsonInfo (int $id) : array
{
  $client = new GuzzleHttp\Client([
      'base_uri' => 'https://akabab.github.io/superhero-api/api/',
       ]
  );
  //Download the information of the fighter
  $jsonUri = 'id/' . $id . '.json';
  $response = $client->request('GET', $jsonUri);
  $body = $response->getBody();
  $information = json_decode($body->getContents(), true);
  return $information;
}
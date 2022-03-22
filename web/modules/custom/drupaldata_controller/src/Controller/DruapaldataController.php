<?php

namespace Drupal\drupaldata_controller\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\Client;

class DruapaldataController
{

  public function page()
  {

    try {
      $client = new \GuzzleHttp\Client();
      $request = $client->get('https://randomuser.me/api/');
      $code = $request->getStatusCode();
//    $response = $request->getBody();
      $response = $request->getBody()->__toString();
      $decoded_json = json_decode($response, true);
      $email = $decoded_json['results'][0]['email'];
      $phone = $decoded_json['results'][0]['phone'];
      $gender = $decoded_json['results'][0]['gender'];
      $picture = $decoded_json['results'][0]['picture']['large'];
      $lastname = $decoded_json['results'][0]['name']['last'];
      $firstname = $decoded_json['results'][0]['name']['first'] . "  " . $lastname;
      $bday = str_replace("-", "/", substr($decoded_json['results'][0]['dob']['date'], 0, 10));
      $password = $decoded_json['results'][0]['login']['password'];
      $location = $decoded_json['results'][0]['location']['street']['number'] . "  " . $decoded_json['results'][0]['location']['street']['name'];;


      return array(
        '#theme' => 'data_list',
        '#name' => $firstname,
        '#email' => $email,
        '#phone' => $phone,
        '#gender' => $gender,
        '#picture' => $picture,
        '#bday' => $bday,
        '#password' => $password,
        '#location'=>$location,
        '#title' => 'User Data'
      );
    } catch (Exception $e) {
      echo 'Excepción capturada: ', $e->getMessage(), "\n";
    }


  }
}

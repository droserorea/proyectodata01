<?php

namespace Drupal\drupalrandom_controller\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\Client;

class DrupalrandomController
{
  public function page()
  {
    try {
      $client = new \GuzzleHttp\Client();
      $request = $client->get('https://randomuser.me/api/');
      $response = $request->getBody()->__toString();
      $decoded_json = json_decode($response, true);
      $email = $decoded_json['results'][0]['email'];
      $phone = $decoded_json['results'][0]['phone'];
      $gender = $decoded_json['results'][0]['gender'];
      $firstname = $decoded_json['results'][0]['name']['first'];



      return array(
        '#theme' => 'data_user',
        '#name' => $firstname,
        '#email' => $email,
        '#phone' => $phone,
        '#gender' => $gender,
        '#title' => 'User Data - Data User'
      );
    } catch (Exception $e) {
      echo 'Excepción capturada: ', $e->getMessage(), "\n";
    }
  }

}

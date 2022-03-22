<?php
namespace Drupal\drupalcustomenodes_controller\Controller;
use \Drupal\node\Entity\Node;
class CreateContentTypesController{
  public function createct(string $name, string $email, string $phone, string $gender, string $bday, array $picture,
                           string $city,string $state,string $street){
    //CREATE CONTENT TYPES
    // Ask for the current time.
    $requested_time = \Drupal::time()->getRequestTime();
    // Create node object Location.
    $nodeLocation = Node::create([
      'type'=>'locationv1',
      'langcode'=>'en',
      'created'=>$requested_time,
      'changed'=>$requested_time,
      'uid' => 1,
      'title'=>'05location',
      'field_cityv1'=>$city,
      'field_statev'=>$state,
      'field_streetv1'=>$street,
    ]);
    $nodeLocation->save();
    // Create node object  User
    $nodeUser = Node::create([
      'type'=>'userv1',
      'langcode'=>'en',
      'created'=>$requested_time,
      'changed'=>$requested_time,
      'uid' => 1,
      'title'=>'05user',
      'field_namev1'=>$name,
      'field_emailv1'=>$email,
      'field_genderv1'=>$gender,
      'field_phonev1'=>$phone,
      'field_bdayv1'=>$bday,
      'field_picturev1'=>$picture
      //'field_locationv1'=>'Name data test1',
    ]);
    $nodeUser->save();

    $msg="Node ready - 03location";
    return array(
      '#theme'=>'customnodes_create',
      '#msgCreate'=>$msg,
      '#title'=>'Node Location Create'
    );

  }
}


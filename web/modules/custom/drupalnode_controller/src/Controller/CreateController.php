<?php
namespace Drupal\drupalnode_controller\Controller;
use \Drupal\node\Entity\Node;
class CreateController{
  public function create(){
    // Ask for the current time.
    $requested_time = \Drupal::time()->getRequestTime();
    // Create node object with attached file.
    $node = Node::create([
      'type'=>'data',
      'langcode'=>'en',
      'created'=>$requested_time,
      'changed'=>$requested_time,
      'uid' => 1,
      'title'=>'data001',
      'field_datadescription'=>'Desc data',
      'field_dataname'=>'Name data test1'
    ]);
    $node->save();

    $msg="Node ready 001";
    return array(
      '#theme'=>'node_create',
      '#msg'=>$msg,
      '#title'=>'Node Create'
    );
  }
}

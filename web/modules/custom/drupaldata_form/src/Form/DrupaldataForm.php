<?php

namespace Drupal\drupaldata_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\drupalcustomenodes_controller\Controller\CreateContentTypesController;


class DrupaldataForm extends FormBase
{

  public function getFormId()
  {
    // TODO: Implement getFormId() method.
    return 'drupaldata_form_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $form['labelinfo'] = [
      '#type' => 'label',
      '#title' => $this->t('User Information'),
    ];
    $form['email'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Email'),
    ];
    $form['gender'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Gender'),
    ];
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
    ];
    $form['phone'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Phone'),
    ];
    $form['bday'] = [
      '#type' => 'date',
      '#title' => $this->t('Bday'),
    ];

    $form['picture'] = array(
      '#type' => 'managed_file',
      '#name' => 'file',
      '#fid'  => 'fid',
      '#title' => t('Picture'),
      '#description' => t('Upload a picture.'),
      '#upload_location' => 'public://',
    );
    $form['labellocation'] = [
      '#type' => 'label',
      '#title' => $this->t('User Location'),
    ];
    $form['street'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Street'),
    ];
    $form['city'] = [
      '#type' => 'textfield',
      '#title' => $this->t('City'),
    ];
    $form['state'] = [
      '#type' => 'textfield',
      '#title' => $this->t('State'),
    ];




    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    include("./web/modules/custom/drupalcustomenodes_controller/src/Controller/CreateContentTypesController.php");
    $aux = new CreateContentTypesController();
    $aux->createct($form_state->getValue('name'), $form_state->getValue('email'), $form_state->getValue('phone'),
      $form_state->getValue('gender'), $form_state->getValue('bday'),$form_state->getValue('picture'),
      $form_state->getValue('city'), $form_state->getValue('state'),$form_state->getValue('street'));

    $this->messenger()->addStatus($this->t('Good mornig @name, data saved'.$form_state->getValue('picture'),
      ['@name' => $form_state->getValue('name')]));

//    \Drupal::messenger()->addStatus('This is a status message');
  }
}

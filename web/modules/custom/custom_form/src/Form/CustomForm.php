<?php

namespace Drupal\custom_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CustomForm extends FormBase
{

  public function getFormId()
  {
    // TODO: Implement getFormId() method.
    return 'custom_form_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('name'),
    ];
    $form['lastname'] = [
      '#type' => 'textfield',
      '#title' => $this->t('lastname'),
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Send'),
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    $this->messenger()->addStatus($this->t('Good mornig @fullname',
      ['@fullname' => $form_state->getValue('name') . " " .$form_state->getValue('lastname')]));
  }
}

<?php
use Drupal\Core\Extension\Extension;
use Drupal\Core\Extension\ExtensionDiscovery;

use Drupal\system\Controller\ThemeController;
use Drupal\Core\Theme\ThemeManagerInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Implementation of hook_form_system_theme_settings_alter()
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 *
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function growbiz_form_system_theme_settings_alter(&$form, &$form_state) {
  // Get the build info for the form
  $build_info = $form_state->getBuildInfo();
  // Get the theme name we are editing
  $theme = \Drupal::theme()->getActiveTheme()->getName();
  // Create Omega Settings Object

  $form['core'] = array(
    '#type' => 'vertical_tabs',
    '#attributes' => array('class' => array('entity-meta')),
    '#weight' => -899
  );

  $form['theme_settings']['#group'] = 'core';
  $form['logo']['#group'] = 'core';
  $form['favicon']['#group'] = 'core';

  $form['theme_settings']['#open'] = FALSE;
  $form['logo']['#open'] = FALSE;
  $form['favicon']['#open'] = FALSE;

  // Custom settings in Vertical Tabs container
  $form['options'] = array(
    '#type' => 'vertical_tabs',
    '#attributes' => array('class' => array('entity-meta')),
    '#weight' => -999,
    '#default_tab' => 'edit-variables',
    '#states' => array(
      'invisible' => array(
       ':input[name="force_subtheme_creation"]' => array('checked' => TRUE),
      ),
    ),
  );

  /* --------- Setting general ----------------*/
  $form['general'] = array(
    '#type' => 'details',
    '#attributes' => array(),
    '#title' => t('Top Header'),
    '#weight' => -999,
    '#group' => 'options',
    '#open' => FALSE,
  );

  $form['general']['call_us'] =array(
    '#type' => 'textfield',
    '#title' => t('Call Us'),
    '#default_value' => theme_get_setting('call_us'),
    '#group' => 'general',
  );
  $form['general']['header_mail'] =array(
    '#type' => 'textfield',
    '#title' => t('Email'),
    '#default_value' => theme_get_setting('header_mail'),
    '#group' => 'general',
  );

  $form['general']['service_hours'] =array(
    '#type' => 'textfield',
    '#title' => t('Service Hours'),
    '#default_value' => theme_get_setting('service_hours'),
    '#group' => 'general',
  );

  $form['general']['facebook'] =array(
    '#type' => 'textfield',
    '#title' => t('Facebook'),
    '#default_value' => theme_get_setting('facebook'),
    '#group' => 'general',
  );
  $form['general']['twitter'] =array(
    '#type' => 'textfield',
    '#title' => t('Twitter'),
    '#default_value' => theme_get_setting('twitter'),
    '#group' => 'general',
  );
  $form['general']['instagram'] =array(
    '#type' => 'textfield',
    '#title' => t('Instagram'),
    '#default_value' => theme_get_setting('instagram'),
    '#group' => 'general',
  );
  $form['general']['youtube'] =array(
    '#type' => 'textfield',
    '#title' => t('Youtube'),
    '#default_value' => theme_get_setting('youtube'),
    '#group' => 'general',
  );


  $form['actions']['submit']['#value'] = t('Save');
}
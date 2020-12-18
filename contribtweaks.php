<?php

require_once 'contribtweaks.civix.php';
use CRM_Contribtweaks_ExtensionUtil as E;

/**
 * Implements hook_civicrm_buildForm().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_buildForm
 */
function contribtweaks_civicrm_buildForm($formName, &$form) {
  if ($formName == 'CRM_Contribute_Form_Contribution') {
    if ($form->elementExists('source')) {
      // Make Source a required field if it exists.
      $form->addRule('source', E::ts('This field is required.'), 'required');
    }
    if ($form->elementExists('contribution_status_id')) {
      // Make Source a required field if it exists.
      $form->addRule('contribution_status_id', E::ts('This field is required.'), 'required');

      if (empty($form->_id)) {
        // If 'status' field exists, make it required, and default it to blank;
        // Intention here is to force the user to think about their selection.
        $form->getElement('contribution_status_id')->addOption('', '');
        $form->setDefaults(array(
          'contribution_status_id' => '',
        ));
      }
    }
  }
}

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function contribtweaks_civicrm_config(&$config) {
  _contribtweaks_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function contribtweaks_civicrm_xmlMenu(&$files) {
  _contribtweaks_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function contribtweaks_civicrm_install() {
  _contribtweaks_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function contribtweaks_civicrm_postInstall() {
  _contribtweaks_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function contribtweaks_civicrm_uninstall() {
  _contribtweaks_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function contribtweaks_civicrm_enable() {
  _contribtweaks_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function contribtweaks_civicrm_disable() {
  _contribtweaks_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function contribtweaks_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _contribtweaks_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function contribtweaks_civicrm_managed(&$entities) {
  _contribtweaks_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function contribtweaks_civicrm_caseTypes(&$caseTypes) {
  _contribtweaks_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function contribtweaks_civicrm_angularModules(&$angularModules) {
  _contribtweaks_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function contribtweaks_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _contribtweaks_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_entityTypes
 */
function contribtweaks_civicrm_entityTypes(&$entityTypes) {
  _contribtweaks_civix_civicrm_entityTypes($entityTypes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_preProcess
 *
 *function contribtweaks_civicrm_preProcess($formName, &$form) {
 *
 *} //
 */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_navigationMenu
 *
 *function contribtweaks_civicrm_navigationMenu(&$menu) {
 *  _contribtweaks_civix_insert_navigation_menu($menu, 'Mailings', array(
 *    'label' => E::ts('New subliminal message'),
 *    'name' => 'mailing_subliminal_message',
 *    'url' => 'civicrm/mailing/subliminal',
 *    'permission' => 'access CiviMail',
 *    'operator' => 'OR',
 *    'separator' => 0,
 *  ));
 *  _contribtweaks_civix_navigationMenu($menu);
 *} //
 */

<?php

require_once 'custommenu.civix.php';
// phpcs:disable
use CRM_Custommenu_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function custommenu_civicrm_config(&$config) {
  _custommenu_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function custommenu_civicrm_xmlMenu(&$files) {
  _custommenu_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function custommenu_civicrm_install() {
  _custommenu_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function custommenu_civicrm_postInstall() {
  _custommenu_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function custommenu_civicrm_uninstall() {
  _custommenu_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function custommenu_civicrm_enable() {
  _custommenu_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function custommenu_civicrm_disable() {
  _custommenu_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function custommenu_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _custommenu_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function custommenu_civicrm_managed(&$entities) {
  _custommenu_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function custommenu_civicrm_caseTypes(&$caseTypes) {
  _custommenu_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function custommenu_civicrm_angularModules(&$angularModules) {
  _custommenu_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function custommenu_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _custommenu_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function custommenu_civicrm_entityTypes(&$entityTypes) {
  _custommenu_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function custommenu_civicrm_themes(&$themes) {
  _custommenu_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function custommenu_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
function  custommenu_civicrm_navigationMenu(&$menu) {
  _custommenu_civix_insert_navigation_menu($menu, '', [
    'label' => 'Mes d??marches',
    'name' => 'Mes_d??marches',
    'url' => '',
    'permission' => 'Access the CiviCRM administration interface and API',
    'attr' => ['target' => '_blank'],
    'icon' => 'crm-i fa-list-ul'
  ]);

  _custommenu_civix_insert_navigation_menu($menu, 'Mes_d??marches', [
    'label' => 'D??claration de licence',
    'name' => 'D??claration de licence',
    'url' => 'https://ffmns.gestad.net/licence/',
    'permission' => 'Access the CiviCRM administration interface and API',
    'attr' => ['target' => '_blank'],
  ]);

  _custommenu_civix_insert_navigation_menu($menu, 'Mes_d??marches', [
    'label' => 'Ajouter une formation',
    'name' => 'Ajouter une formation',
    'url' => 'https://ffmns.gestad.net/wp-admin/admin.php?page=CiviCRM&q=civicrm%2Fevent%2Fadd&reset=1&action=add',
    'permission' => 'Access the CiviCRM administration interface and API',
    'attr' => ['target' => '_blank'],
  ]);

  _custommenu_civix_insert_navigation_menu($menu, 'Mes_d??marches', [
    'label' => 'Renouvellement d affiliation f??d??rale',
    'name' => 'Renouvellement d affiliation f??d??rale',
    'url' => 'https://ffmns.gestad.net/re-affiliation/',
    'permission' => 'Access the CiviCRM administration interface and API',
    'attr' => ['target' => '_blank'],
  ]);

  _custommenu_civix_insert_navigation_menu($menu, 'Mes_d??marches', [
    'label' => 'Demande agr??ment CFD',
    'name' => 'Demande agr??ment CFD',
    'url' => 'https://ffmns.gestad.net/agrement/',
    'permission' => 'Access the CiviCRM administration interface and API',
    'attr' => ['target' => '_blank'],
  ]);
}
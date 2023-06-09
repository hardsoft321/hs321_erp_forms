<?php
/**
 * @license http://hardsoft321.org/license/ GPLv3
 * @author  Leon Nikitin <nlv@lab321.ru>
 * @package hs321_erp
 */

$manifest = array(
    'name' => 'hs321_erp_forms',
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'author' => 'Leon.V.Nikitin (nlv@lab321.com)',
    'description' => 'Добавление ERP функционала в SuiteCRM',
    'is_uninstallable' => true,
    'published_date' => '2023-04-28',
    'type' => 'module',
    'version' => '0.12.0',
  'dependencies' => array(
    array(
      'id_name' => 'hs321_erp',
      'version' => '0.12',
    ),
  ),
);
$installdefs = array(
    'id' => 'hs321_erp_forms',
    'copy' => array (
        array (
            'from' => '<basepath>/source/copy',
            'to' => '.',
        ),
    ),
    'vardefs'=>array(
      array (
          'from' => '<basepath>/source/vardefs/AOS_Contracts/erp_forms_vardefs.php',
          'to_module' => 'AOS_Contracts',
      ),
    ),
    'language'=> array (
      array(
          'from'=> '<basepath>/source/language/modules/AOS_Contracts/ru_ru.lang.php',
          'to_module'=> 'AOS_Contracts',
          'language'=>'ru_ru'
      ),
      array(
          'from'=> '<basepath>/source/language/modules/AOS_Contracts/en_us.lang.php',
          'to_module'=> 'AOS_Contracts',
          'language'=>'en_us'
      ),
    ),
);

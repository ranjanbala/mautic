<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$view->extend('MauticCoreBundle:Default:content.html.php');
$view['slots']->set('mauticContent', 'client');
$view['slots']->set('headerTitle', $view['translator']->trans('mautic.api.client.header.index'));

$view['slots']->set('actions', $view->render('MauticCoreBundle:Helper:page_actions.html.php', [
    'templateButtons' => [
        'new' => $permissions['create'],
    ],
    'routeBase' => 'client',
    'langVar'   => 'api.client',
]));
?>

<div class="panel panel-default bdr-t-wdh-0 mb-0">
    <?php echo $view->render('MauticCoreBundle:Helper:list_toolbar.html.php', [
        'searchValue'     => $searchValue,
        'searchHelp'      => 'mautic.api.client.help.searchcommands',
        'action'          => $currentRoute,
        'routeBase'       => 'client',
        'templateButtons' => [],
        'filters'         => $filters,
    ]); ?>
    <div class="page-list">
        <?php $view['slots']->output('_content'); ?>
    </div>
</div>

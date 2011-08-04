<?php

/**
 * Copyright 2010 Hambrook Web Design <rick@hambrook.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Rick Hambrook <rick@hambrook.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

$_options[] = array(
    'id'          => 'jojo_external_links_newwindow',
    'category'    => 'External Links',
    'label'       => 'Open in new window',
    'description' => 'Open external links in a new window?',
    'type'        => 'radio',
    'default'     => 'yes',
    'options'     => 'yes,no',
    'plugin'      => 'jojo_external_links'
);
$_options[] = array(
    'id'          => 'jojo_external_links_relorclass',
    'category'    => 'External Links',
    'label'       => 'Rel=external or class=external?',
    'description' => 'Set the relationship of the link, the class, or both to \'external\'? None means no styling.',
    'type'        => 'radio',
    'default'     => 'both',
    'options'     => 'rel,class,both,none',
    'plugin'      => 'jojo_external_links'
);
$_options[] = array(
    'id'          => 'jojo_external_links_newwindowparent',
    'category'    => 'External Links',
    'label'       => 'New Window CSS Parent',
    'description' => 'Only child items of this CSS selector will open in a new item. Leave blank for all.',
    'type'        => 'text',
    'default'     => '',
    'options'     => '',
    'plugin'      => 'jojo_external_links'
);
$_options[] = array(
    'id'          => 'jojo_external_links_relorclassparent',
    'category'    => 'External Links',
    'label'       => 'Rel or Class CSS Parent',
    'description' => 'Only child items of this CSS selector will open get styled (rel=external or class=external). Useful for not styling links in your template footer or sidebar. Leave blank for all.',
    'type'        => 'text',
    'default'     => '#main',
    'options'     => '',
    'plugin'      => 'jojo_external_links'
);
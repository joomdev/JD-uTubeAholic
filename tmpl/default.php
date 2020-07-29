<?php
/*-------------------------------------------------------------------------------
# JD uTubeAholic module for Joomla 3.x v1.0.1
# -------------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
--------------------------------------------------------------------------------*/
// No direct access
defined('_JEXEC') or die('Restricted access');
$document = JFactory::getDocument();
$path = $params->get('path');
$loadmoreButton	= $params->get('loadmoreButton');
?>
<style type="text/css">
    .spidochetube{max-width: 100%;}
    .spidochetube #spidochetube_player {border-bottom: #fff solid 1px; padding: 20px 0; background: <?php echo $params->get('playerbackgroundColor') ?>;}
    #spidochetube_player #player {box-shadow: 0 1px 12px <?php echo $params->get('playerboxshadowEffect') ?>;}
    .spidochetube #spidochetube_list li.spidochetube_current {background: <?php echo $params->get('thumbhiliteColor') ?>;}
    .spidochetube #spidochetube_list li {float: left; width: 23%; padding: 22px 0 10px 0; list-style: none; background-color: <?php echo $params->get('thumbbackgroundColor') ?>; margin: 6px 1%; border: 1px solid #CFD5DD; box-sizing: border-box; border-radius: 1px; margin-bottom: 15px;}
    
    </style>
<script>
        jQuery(function($){
            $('#youtube').spidochetube({
                //key             : 'AIzaSyCj2GrDSBy6ISeGg3aWUM4mn3izlA1wgt0',
                //id              : 'UUUJW2GcB6gzdOhiP5UjZ_hA',
                key             : '<?php echo $params->get('apiKey') ?>',
                id              : '<?php echo $params->get('playlistID') ?>',
                max_results     : <?php echo $params->get('max_results') ?>,
                <?php if ($loadmoreButton == "1") : ?>
                paging          : 'loadmore',
                moreText        : '<?php echo $params->get('moreText') ?>',
                relatedVideos   : '<?php echo $params->get('relatedVideos') ?>',
                <?php endif ; ?>
                scroll_duration : <?php echo $params->get('scroll_duration') ?>,
                autoplay : <?php echo $params->get('autoPlay') ?>,
                complete: function(){
            // Initialize the scroll plugin after the playlist is ready
            $('#spidochetube_list').niceScroll({cursorcolor:'#666', cursorborder:'0px solid #fff',autohidemode:true});
        }
            });
        });
    </script>

<div id="youtube" class="spidochetube"></div>
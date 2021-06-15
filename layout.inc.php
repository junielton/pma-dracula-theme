<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */

/**
 * configures general layout
 * for detailed layout configuration please refer to the css files
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMAHomme
 */

/**
 * navi frame
 */
// navi frame width
$GLOBALS['cfg']['NaviWidth']                = 240;

// foreground (text) color for the navi frame
$GLOBALS['cfg']['NaviColor']                = '#f8f8f2';

// background for the navi frame
$GLOBALS['cfg']['NaviBackground']           = '#282a36';

// foreground (text) color of the pointer in navi frame
$GLOBALS['cfg']['NaviPointerColor']         = '#f8f8f2';

// background of the pointer in navi frame
$GLOBALS['cfg']['NaviPointerBackground']    = 'rgba(255,255,255,0.05)';

// Background of header bar
$GLOBALS['cfg']['HeaderBackground']         = '#282a36';
$GLOBALS['cfg']['SuccessText']              = '#f1fa8c';
$GLOBALS['cfg']['ControlColor']             = '#f8f8f2';
$GLOBALS['cfg']['PageBackground']           = '#282a36';

$GLOBALS['cfg']['HeadingsTextColor']           = '#f8f8f2';

/**
 * main frame
 */
// foreground (text) color for the main frame
$GLOBALS['cfg']['MainColor']                = '#6272a4';

// background for the main frame
$GLOBALS['cfg']['MainBackground']           = '#282a36';

// foreground (text) color of the pointer in browse mode
$GLOBALS['cfg']['BrowsePointerColor']       = '#f8f8f2';

// background of the pointer in browse mode
$GLOBALS['cfg']['BrowsePointerBackground']  = '#50fa7b';

// foreground (text) color of the marker (visually marks row by clicking on it)
// in browse mode
$GLOBALS['cfg']['BrowseMarkerColor']        = '#f8f8f2';

// background of the marker (visually marks row by clicking on it) in browse mode
$GLOBALS['cfg']['BrowseMarkerBackground']   = '#ffb86c';

/**
 * fonts
 */
/**
 * the font family as a valid css font family value,
 * if not set the browser default will be used
 * (depending on browser, DTD and system settings)
 */
$GLOBALS['cfg']['FontFamily']           = '"Open Sans", sans-serif';
/**
 * fixed width font family, used in textarea
 */
$GLOBALS['cfg']['FontFamilyFixed']      = 'consolas, monospace';

/**
 * tables
 */
// border
$GLOBALS['cfg']['Border']               = 0;
// table header and footer color
$GLOBALS['cfg']['ThBackground']         = '#282a36';
// table header and footer background
$GLOBALS['cfg']['ThColor']              = '#ccc';
// table data row background
$GLOBALS['cfg']['BgOne']                = 'rgba(0,0,0,0.2)';
// table data row background, alternate
$GLOBALS['cfg']['BgTwo']                = '#111';



/**
 * Chart colors
 */

$GLOBALS['cfg']['chartColor'] = array(
   'gradientIntensity'       => 50,
   // The style of the chart title.
   'titleColor'              => '#44475a',
   'titleBgColor'            => '#E5E5E5',
   // Chart border (0 for no border)
   'border'                  => '#ccc',
   // Chart background color.
   'bgColor'                 => '#FBFBFB',
   // when graph area gradient is used, this is the color of the graph
   // area border
   'graphAreaColor'          => '#D5D9DD',
   // the background color of the graph area
   'graphAreaGradientColor'  => $GLOBALS['cfg']['BgTwo'],
   // the color of the grid lines in the graph area
   'gridColor'               => '#E6E6E6',
   // the color of the scale and the labels
   'scaleColor'              => '#D5D9DD',

);
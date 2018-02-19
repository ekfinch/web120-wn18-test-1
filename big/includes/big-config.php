<?php 
/* BIG Config *?

/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LcIVEAUAAAAAPXpNo8XEdxOxbauYLY9FNprCof7";
$secretKey = "6LcIVEAUAAAAAGAGEdH4doZN4r_3DMzKZ6B7H5s0";

//echo basename($_SERVER['PHP_SELF']);
//die;

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo "constant: " . THIS_PAGE;
//die;

// This switch dynamically updates PHP short tags you added to your header.php
switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Erica Finch: SCC WEB120 Portal';
        $logo = 'fa fa-rocket';
        $PageID = 'Welcome';
    break;
        
    case 'flexbox.php':
        $title = 'Erica Finch: Flexbox Research';
        $logo = 'fa fa-bolt';
        $PageID = 'Flexbox Research';
    break;
        
    case 'galleries.php':
        $title = 'Erica Finch: Galleries Research';
        $logo = 'fa fa-image';
        $PageID = 'Galleries Research';
    break;

    case 'map.php':
        $title = 'Erica Finch: Google Map';
        $logo = 'fa fa-map-signs';
        $PageID = 'Google Map';
    break;        
        
    case 'calendar.php':
        $title = 'Erica Finch: Responsive Calendar';
        $logo = 'fa fa-calendar';
        $PageID = 'Event Calendar';
    break;        
        
    case 'youtube.php':
        $title = 'Erica Finch: Responsive YouTube Video';
        $logo = 'fa fa-film';
        $PageID = 'YouTube Video';
    break;        
        
    case 'parallax.php':
        $title = 'Erica Finch: Parallax Research';
        $logo = 'fa fa-cogs';
        $PageID = 'Parallax Research';
    break; 
        
    case 'shoppingcarts.php':
        $title = 'Erica Finch: Shopping Cart Research';
        $logo = 'fa fa-shopping-cart';
        $PageID = 'Shopping Cart Research';
    break; 
        
    case 'siteapp.php':
        $title = 'Erica Finch: Responsive Website Vs. Native Mobile App Research';
        $logo = 'fa fa-mobile';
        $PageID = 'Responsive Website Vs. Native Mobile App Research';
    break;      
        
    case 'webcam.php':
        $title = 'Erica Finch: Two Examples of Webcams';
        $logo = 'fa fa-desktop';
        $PageID = 'Oahu Pipeline Webcam';
    break;      
            
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}




















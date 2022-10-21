<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
            <div id="wrapper" class="hfeed">
            <header>
        <div class="top-bar-blue">
             <div class="wrapper">
                  <div class="top-menu">
                       <div class="col left">
                           <a href="#" class="logo"><img src="<?php echo home_url('/'); ?>/wp-content/uploads/2022/10/wabeh-logo.svg" width="304" height="112" alt="wabeh-logo"> </a>
                       </div>
                       <div class="col middle">
                           <ul id="main_nav">
                               <li class="active"><a href="#"><span>Home</span></a></li>
                               <li><a href="#"><span>Customers</span></a></li>
                               <li><a href="#"><span>Merchants</span></a></li>
                               <li class="has-children">
                                   <a href="#"><span>How it works</span></a>
                                   <div class="sub-menu">
                                       <ul>
                                           <a href="#"><span>Fire & special peril</span></a>
                                           <li><a href="#"><span>Business interruption</span></a></li>
                                           <li><a href="#"><span>Burglary insurance</span></a></li>
                                           <li><a href="#"><span>Public Liability</span></a></li>
                                           <li><a href="#"><span>Marine Insurance</span></a></li>
                                       </ul>
                                   </div>
                               </li>
                               <li><a href="#"><span>FAQ's</span></a></li>
                           </ul>
                       </div>
                      <div class="col right">
                          <a href="#" class="primary-btn">MERCHANT SIGN UP</a>
                      </div>
                  </div>
             </div>
        </div>
    </header>
            <div id="container">
                <main id="content" role="main">

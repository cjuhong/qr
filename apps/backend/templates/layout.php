<CTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
                                             <head>
                                             <title>
<?php echo __('School Net Admin Interface') ?>
                                             </title>
                                             <link rel="shortcut icon" href="/favicon.ico" />
<?php include_javascripts() ?>
<?php include_stylesheets() ?>
                                             </head>

                                             <body>
                                             <div id="container">
                                             <div id="header">
                                             <h1>
                                             <a href="<?php echo url_for('homepage') ?>">
                                             <img src="/images/logo.jpg" alt="School Net backend system" />
                                             </a>
                                             </h1>
                                             <li>
<?php // include_component('language', 'language') ?>
                                             </li>
                                             </div>
                                             
                                             <div id="menu">
<?php  include_component('breadcrumbs', 'menu') ?>

                                             </div>

<div id="content">
<?php echo $sf_content ?>
                                             </div>
                                             </div>
                                             </body>
                                             </html>

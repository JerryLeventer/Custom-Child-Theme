<?php
//general tab
rs::addOptionTab(array(
   'title' => 'General Options',
   'name'  => 'Avso-general-options',
   'icon'  => 'dashicons-admin-generic',
   'controls' => array(
      array(
         'name' => 'favicon',
         'type' => 'image',
         'label' => 'Favicon'
      ),array(
         'name' => 'logo_avs',
         'type' => 'image',
         'label' => 'Logo'
      ),array(
         'name' => 'slogan_avs',
         'type' => 'text',
         'label' => 'Slogan :'
      ),array(
         'name' => 'phone_avs',
         'type' => 'text',
         'label' => 'Phone :'
      ),array(
         'name' => 'credit_card',
         'type' => 'image',
         'label' => 'Credit Card :'
      ),array(
         'name' => 'copy_right',
         'type' => 'text',
         'label' => 'Copyright :'
      )
   )
));
?>
<?php
// Check core class for avoid errors
if (class_exists('CSF')) {

    // Set a unique slug-like ID
    $prefix = 'my_framework';

    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => 'Tùy chỉnh Theme',
        'menu_slug' => 'my-framework',
        'framework_title' => 'Mộc Lê Gia',
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'title' => 'Logo',
        'fields' => array(
            // A text field
            array(
                'type'    => 'media',
                'title'   => 'Logo',
                'library' => 'image',
                'url' => false,
                'class' => 'theme-option__preview-logo'
            ),

        )
    ));

    // Create a section
    CSF::createSection($prefix, array(
        'title' => 'Tab Title 2',
        'fields' => array(

            // A textarea field
            array(
                'id' => 'opt-textarea',
                'type' => 'textarea',
                'title' => 'Simple Textarea',
            ),

        )
    ));

}
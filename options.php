<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
$options= array(
    'tab_basic' => array(
        'type' => 'tab',
        'title' => __('Basic', '{domain}'),

    'options' => array(
    'label'=>array(

        'label'=>__('Button Text','fw'),
        'des'=>__('This is a  button in the description','fw'),
        'type'=>'text',
        'value'=>'submit'
    ),

    'btn_type'  => array(
        'type'  => 'multi-picker',
        'label' => false,
        'desc'  => false,
        'value' => array(),
        'picker' => array(
            // '<custom-key>' => option
            'btn_type_choice' => array(
                'label'   => __('Choose Type', '{domain}'),
                'type'    => 'select', // or 'short-select'
                'choices' => array(
                    'target_button'  => __('Target Button', '{domain}'),
                    'download' => __('Downloadable', '{domain}'),
                    'form_popup' => __('Popup', '{domain}'),
                ),
                'desc'    => __('Description', '{domain}'),
                'help'    => __('Help tip', '{domain}'),
            )
        ),
        'choices' => array(
            'target_button' => array(
                'button_link' => array(
                    'type'  => 'text',
                    'label' => __('url', '{domain}'),
                ),

                'open_new_tab' => array(
                    'type'  => 'switch',
                    'label' => __('open in New tab', '{domain}'),
                )

            ),
            'download' => array(
                'down_link' => array(
                    'type'  => 'upload',
                    'label' => __('Download Link', '{domain}'),
                    'files_ext' => array( 'doc', 'pdf', 'zip' ),
                    'images_only' => false,
                ),

            ),

            'form_popup' => array(
                'popup_id' => array(
                    'type'  => 'text',
                    'label' => __('Popup Id', '{domain}'),
                ),

            ),
        ),
        ),

    )
    ),

    'tab_appearance' => array(
    'type' => 'tab',
    'title' => __('Appearance', '{domain}'),

    'options' => array(

        'btn_color'  => array(
            'label'   => __( 'Button color', 'fw' ),
            'desc'    => __( 'Choose a color for Button', 'fw' ),
            'type'    => 'color-picker',
            'value'   => '#000000',
            'palettes' => array( '#ffffff', '#0ff00d', '#000000' )
        ),
        'btn_txt_color'  => array(
            'label'   => __( 'Button text color', 'fw' ),
            'desc'    => __( 'Choose a text color for your Button', 'fw' ),
            'type'    => 'color-picker',
            'value' => '#ffffff',
            'palettes' => array( '#ffffff', '#0ff00d', '#000000' )
        ),

        'btn_hover_color'  => array(
            'label'   => __( 'Button Hover color', 'fw' ),
            'desc'    => __( 'Choose a  hover color for Button', 'fw' ),
            'type'    => 'color-picker',
            'value'   => '#000000',
            'palettes' => array( '#ffffff', '#0ff00d', '#000000' )
        ),
        'btn_hover_txt_color'  => array(
            'label'   => __( 'Button hover text color', 'fw' ),
            'desc'    => __( 'Choose a  hover text color for your Button', 'fw' ),
            'type'    => 'color-picker',
            'value' => '#ffffff',
            'palettes' => array( '#ffffff', '#0ff00d', '#000000' )
        ),
    )
),

	'tab_advanced' => array(
    'type' => 'tab',
    'title' => __('Advance', '{domain}'),

    'options' => array(



        'btn_cst_cls'   => array(
            'type'  => 'text',
            'value' => '',
            'label' => __( 'Custom Class', 'fw' ),
            'desc'  => __( 'Enter custom CSS class.', 'fw' ),
            'help' => __('when adding more than one class, use space to separate them  eg- class-1 class-2')

        ),

    )
    ),


);


<?php

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'    => 'Tema',
    'menu_title'    => 'Tema',
    'menu_slug'     => 'tema',
    'redirect'      => true,
    'position'      => '3.1',
    'icon_url'      =>  'dashicons-admin-generic',
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Logos',
    'menu_title' => 'Logos',
    'parent_slug' => 'tema',
    'menu_slug'   => 'tema-logo',
    'update_button' => __('Salvar', 'acf'),
    'updated_message' => __("Logo Salvo", 'acf'),
    'post_id' => 'opt-logo',
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Footer',
    'menu_title' => 'Footer',
    'parent_slug' => 'tema',
    'menu_slug'   => 'teme-footer',
    'update_button' => __('Salvar', 'acf'),
    'updated_message' => __("Footer Salvo", 'acf'),
    'post_id' => 'opt-footer',
  ));

  acf_add_options_sub_page(array(
    'page_title' => 'Redes Sociais',
    'menu_title' => 'Redes Sociais',
    'parent_slug' => 'tema',
    'menu_slug'   => 'redes-sociais',
    'update_button' => __('Salvar', 'acf'),
    'updated_message' => __("Redes Sociais Salvas", 'acf'),
    'post_id' => 'opt-social',
  ));
}

if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'group_6050f48e3d492',
    'title' => 'Logo',
    'fields' => array(
      array(
        'key' => 'field_6050f59911dc2',
        'label' => 'Desktop',
        'name' => 'desktop',
        'type' => 'image',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_6050f5aa11dc3',
        'label' => 'Mobile',
        'name' => 'mobile',
        'type' => 'image',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_60521c3a3a72a',
        'label' => 'Fav Icon',
        'name' => 'fav_icon',
        'type' => 'image',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'url',
        'preview_size' => 'thumbnail',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'tema-logo',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

  acf_add_local_field_group(array(
    'key' => 'group_60916d850c349',
    'title' => 'Type Form',
    'fields' => array(
      array(
        'key' => 'field_60916e4cc15ab',
        'label' => 'Codigo',
        'name' => 'codigo',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'new_lines' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'type-form.php',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));

endif;

if (function_exists('acf_add_local_field_group')) :

  acf_add_local_field_group(array(
    'key' => 'group_63616a113fd2a',
    'title' => 'Redes Sociais Widget',
    'fields' => array(
      array(
        'key' => 'field_63616a11d0886',
        'label' => 'Redes Sociais',
        'name' => 'redes_sociais_widget',
        'aria-label' => '',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layout' => 'table',
        'pagination' => 0,
        'min' => 0,
        'max' => 0,
        'collapsed' => '',
        'button_label' => 'Adicionar Linha',
        'rows_per_page' => 20,
        'sub_fields' => array(
          array(
            'key' => 'field_63616d55d0887',
            'label' => 'Redes Sociais',
            'name' => 'select_social_media_widget',
            'aria-label' => '',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'whatsapp' => 'WhatsApp',
              'chat' => 'Chat',
              'facebook' => 'Facebook',
              'instagram' => 'Instagram',
              'twitter' => 'Twitter',
              'linkedin' => 'Linkedin',
            ),
            'default_value' => false,
            'return_format' => 'value',
            'multiple' => 0,
            'allow_null' => 0,
            'ui' => 0,
            'ajax' => 0,
            'placeholder' => '',
            'parent_repeater' => 'field_63616a11d0886',
          ),
          array(
            'key' => 'field_63616dc2d0888',
            'label' => 'Link Rede Social',
            'name' => 'link_rede_social_widget',
            'aria-label' => '',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'parent_repeater' => 'field_63616a11d0886',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'redes-sociais',
        ),
      ),
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'teme-footer',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));

endif;
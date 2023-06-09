<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Developed by Roger Junior -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <meta name="theme-color" content="#000000" />

    <?php wp_head(); ?>
</head>

<body <?php echo body_class() ?>>
    <a class="skip-to-content-link" href="#content">
        Pular para o conteúdo
    </a>


    <?php if (current_user_can('edit_posts')) { ?>
        <a href="<?php echo get_edit_post_link(); ?>" class="wp-edit" title="Edit this page">
            Editar página
        </a>
    <?php
    } ?>
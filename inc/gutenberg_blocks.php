<?php
if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}



function register_acf_block_types()
{
    acf_register_block_type(
        array(
            'name' => 'Header',
            'title' => ('Header'),
            'category' => 'webbakery-gutenberg-blocks',
            'description' => _('header'),
            'render_template' => 'template-parts/blocks/content/header.php',
            'icon' => 'welcome-view-site',
            'keywords' => array('header', 'image')
        )
    );
    acf_register_block_type(
        array(
            'name' => 'CTA',
            'title' => ('CTA'),
            'category' => 'webbakery-gutenberg-blocks',
            'description' => _('Footer CTA'),
            'render_template' => 'template-parts/blocks/cta/cta.php',
            'icon' => 'align-center',
            'keywords' => array('cta', 'products')
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Image left text right',
            'title' => ('Image left text right'),
            'category' => 'webbakery-gutenberg-blocks',
            'description' => _('Image left and text right'),
            'render_template' => 'template-parts/blocks/image-text/image-left-text-right.php',
            'icon' => '<svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" role="img" aria-hidden="true" focusable="false"><path d="M3 18h8V6H3v12zM14 7.5V9h7V7.5h-7zm0 5.3h7v-1.5h-7v1.5zm0 3.7h7V15h-7v1.5z"></path></svg>',
            'keywords' => array('image', 'text')
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Button',
            'title' => ('Button'),
            'category' => 'webbakery-gutenberg-blocks',
            'description' => _('Button with arrow'),
            'render_template' => 'template-parts/blocks/content/button.php',
            'icon' => 'button',
            'keywords' => array('button', 'text')
        )
    );


    acf_register_block_type(
        array(
            'name' => 'Content',
            'title' => ('Content'),
            'category' => 'webbakery-gutenberg-blocks',
            'description' => _('Content'),
            'render_template' => 'template-parts/blocks/content/content.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('button', 'text')
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Projecten',
            'title' => ('Projecten'),
            'category' => 'webbakery-gutenberg-blocks',
            'description' => _('Projecten'),
            'render_template' => 'template-parts/blocks/loops/projects.php',
            'icon' => 'editor-paste-text',
            'keywords' => array('projecten', 'project')
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Mansory Grid Projecten',
            'title' => ('Mansory Grid Projecten'),
            'description' => _('Mansory Grid Projecten'),
            'category' => 'webbakery-gutenberg-blocks',
            'render_template' => 'template-parts/blocks/grid/mansory.php',
            'icon' => 'grid-view',
            'keywords' => array('mansory', 'grid')
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Mansory Grid Afbeelding',
            'title' => ('Mansory Grid Afbeelding'),
            'description' => _('Mansory Grid Afbeelding'),
            'category' => 'webbakery-gutenberg-blocks',
            'render_template' => 'template-parts/blocks/grid/mansory-images.php',
            'icon' => 'grid-view',
            'keywords' => array('mansory', 'grid')
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Business Projects Current',
            'title' => ('Business Projects Current'),
            'description' => _('Business Projects'),
            'category' => 'webbakery-gutenberg-blocks',
            'render_template' => 'template-parts/blocks/loops/business-projects.php',
            'icon' => 'grid-view',
            'keywords' => array('business', 'projects')
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Business Projects Exit',
            'title' => ('Business Projects Exit'),
            'description' => _('Business Projects'),
            'category' => 'webbakery-gutenberg-blocks',
            'render_template' => 'template-parts/blocks/loops/business-projects-exit.php',
            'icon' => 'grid-view',
            'keywords' => array('business', 'projects')
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Business Projects info',
            'title' => ('Business Projects info'),
            'description' => _('Business Projects + info'),
            'category' => 'webbakery-gutenberg-blocks',
            'render_template' => 'template-parts/blocks/loops/business-projects-info.php',
            'icon' => 'grid-view',
            'keywords' => array('business', 'projects')
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Nieuws Overzicht',
            'title' => ('Nieuws Overzicht'),
            'description' => _('Nieuws Overzicht'),
            'category' => 'webbakery-gutenberg-blocks',
            'render_template' => 'template-parts/blocks/loops/news-overview.php',
            'icon' => 'grid-view',
            'keywords' => array('business', 'projects')
        )
    );

    acf_register_block_type(
        array(
            'name' => 'Socials',
            'title' => ('Socials'),
            'description' => _('socials'),
            'category' => 'webbakery-gutenberg-blocks',
            'render_template' => 'template-parts/blocks/content/socials.php',
            'icon' => 'share',
            'keywords' => array('social', 'link')
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Socials met tekst',
            'title' => ('Socials met tekst'),
            'description' => _('Socials met tekst'),
            'category' => 'webbakery-gutenberg-blocks',
            'render_template' => 'template-parts/blocks/content/socials-text.php',
            'icon' => 'share',
            'keywords' => array('social', 'link')
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Video',
            'title' => ('Video'),
            'description' => _('Video'),
            'category' => 'webbakery-gutenberg-blocks',
            'render_template' => 'template-parts/blocks/content/video.php',
            'icon' => 'welcome-view-site',
            'keywords' => array('video')
        )
    );
    acf_register_block_type(
        array(
            'name' => 'Portfolio',
            'title' => ('Portfolio'),
            'description' => _('Portfolio'),
            'category' => 'webbakery-gutenberg-blocks',
            'render_template' => 'template-parts/blocks/portfolio.php',
            'icon' => 'grid-view',
            'keywords' => array('portfolio')
        )
    );
}


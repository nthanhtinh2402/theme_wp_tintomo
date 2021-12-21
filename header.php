<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>./css/style.css">
    <link rel="icon" href="<?php bloginfo('template_directory')?>./images/icon-favicon.png" >
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="header-top-logo">
                        <div class="header-top-logo-img">
                            <h1>
                                <a href="<?php bloginfo( 'url' )?>">
                                    <img src="<?php bloginfo('template_directory')?>./images/tintomo.png" alt="tintomo.com, tintomo, tin tò mò.">
                                </a>
                            </h1>
                        </div>
                    </div>
                    <div class="header-top-search">
                        <form action="">
                            <input name="s" class="header-top-search-input" placeholder="Tìm kiếm..." type="text" value="" autocomplete="off">
                            <button type="submit" class="header-top-search-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </form>         
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="header-main-menu">
                    <?php wp_nav_menu( 
                        array( 
                            'theme_location' => 'main-menu', 
                            'container' => 'false', 
                            'menu_id' => 'main-menu', 
                            'menu_class' => 'menu'
                        ) 
                        ); 
                    ?>
                    </div>
                    <div class="header-main-mobile-menu">
                        <div class="header-main-mobile-menu-btn">
                            <input type="checkbox" id="nav-mobile-input" class="nav-input"> 
                            <label for="nav-mobile-input" class="header-main-mobile-menu-btn-open">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </label>
                            <label class="nav_overlay" for="nav-mobile-input"></label>
                            <nav class="nav_mobile">
                                <ul  > 
                                    <li>
                                        <form>
                                            <input name="s" class="header-top-search-input-mobile" placeholder="Tìm kiếm..." type="text" value="" autocomplete="off">
                                            <button type="submit" class="header-top-search-btn-mobile">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                </svg>
                                            </button>
                                        </form>
                                        
                                    </li>
                                    <?php wp_nav_menu( 
                                        array( 
                                            'theme_location' => 'main-menu', 
                                            'container' => 'false', 
                                            'menu_id' => 'main-menu', 
                                            'menu_class' => 'menu'
                                        ) 
                                        ); 
                                    ?>
                                </ul>
                                
                            </nav>
                            <label for="nav-mobile-input" class="header-main-mobile-menu-btn-close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </label>
                        </div>
                        <div class="header-main-mobile-menu-logo">
                            <h1>
                               <a href="<?php bloginfo( 'url' )?>"><img src="<?php bloginfo('template_directory')?>./images/tintomo-mobile.png" alt="tintomo"></a> 
                            </h1>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
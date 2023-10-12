<?php

if (have_rows('page_builder', get_the_ID())) {

    while (have_rows('page_builder', get_the_ID())):
        the_row();

        switch (get_row_layout()) {


            case 'home': {
                    include('page_builder/home.php');
                }
                break;

            case 'about': {
                    include('page_builder/about.php');
                }
                break;

            case 'skills': {
                    include('page_builder/skills.php');
                }
                break;

            case 'projects': {
                    include('page_builder/projects.php');
                }
                break;


            default: {
                    the_content();
                }
                break;

        }

    endwhile;

}

?>
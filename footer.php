<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package XPro Code Boilerplate
 */

?>


<!-- FOOTER -->
<footer>

    <section class="d-flex flex-column flex-sm-row justify-content-between align-items-start content-container">
        <a href="#" class="logo-container justify-content-between align-items-start">
            <img src="/wp-content/uploads/2023/08/logo-xpro-code-boilerplate.png" />
        </a>

        <?php
            $args = array(
                "container_class" => "menu-footer-container",
                // "menu_class" => "d-flex flexbox-gap-20",
                "menu" => "Footer Menu",
            );
            wp_nav_menu($args);
            ?>

        <section class="contact">
            <address>
                <b>Rua 1</b> <br />
                100 Random Street <br />
                US, NSW 2010 
            </address>
            
            
        </section>


        <section class="quality">
            Quality Assurance
            <Br />

            <img src="/wp-content/uploads/2023/08/quality-assurance.png" />
        </section>


    </section>


    <section class="final content-container d-flex flex-sm-row flex-column-reverse  flex-no-wrap flex-sm-wrap justify-content-between">

        <section class="left  ">
            
            © 2023 XPro Code. All rights reserved.
        </section>

        <section class="middle ">

            <a href="#">Terms & Conditions</a>

            <a href="#">Privacy Policy</a>

        </section>

        <section class="right  ">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M18 6.29985H15.6244H14.9936C14.4505 6.29985 14.0101 6.74015 14.0101 7.2833V10.7337H18L17.4156 14.5322H14.0101V21.5H9.62255V14.5322H6V10.7337H9.57575L9.62255 7.12815L9.6159 6.47355C9.59395 4.30109 11.3372 2.52217 13.5097 2.5002C13.5229 2.50007 13.5362 2.5 13.5494 2.5H18V6.29985Z" stroke="#002889" stroke-width="2" stroke-linejoin="round"/>
                </svg>
            </a>

            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M2.5 17.8811C3.46443 18.4143 10.4457 22.4386 15.41 19.337C20.3742 16.2353 20.1003 10.8916 20.1003 8.443C20.55 7.5009 21.5 7.02195 21.5 4.4719C20.5669 5.3339 19.6394 5.6272 18.7175 5.3518C17.8144 3.97478 16.5718 3.36573 14.9897 3.52467C12.6167 3.76307 11.7485 6.09125 12.004 9.10335C8.34495 10.9537 5.47575 7.762 3.99709 5.3518C3.50304 7.24995 3.02665 9.5288 3.99709 12.0497C4.64405 13.7303 6.19925 15.1512 8.6627 16.3123C6.16615 17.6654 4.11191 18.1883 2.5 17.8811Z" stroke="#002889" stroke-width="2" stroke-linejoin="round"/>
                </svg>
            </a>

            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M17 3H7C4.79086 3 3 4.79086 3 7V17C3 19.2092 4.79086 21 7 21H17C19.2092 21 21 19.2092 21 17V7C21 4.79086 19.2092 3 17 3Z" stroke="#002889" stroke-width="2" stroke-linejoin="round"/>
                    <path d="M12 16C14.2092 16 16 14.2092 16 12C16 9.79085 14.2092 8 12 8C9.79085 8 8 9.79085 8 12C8 14.2092 9.79085 16 12 16Z" stroke="#002889" stroke-width="2" stroke-linejoin="round"/>
                    <path d="M17.5 7.5C18.0523 7.5 18.5 7.0523 18.5 6.5C18.5 5.9477 18.0523 5.5 17.5 5.5C16.9477 5.5 16.5 5.9477 16.5 6.5C16.5 7.0523 16.9477 7.5 17.5 7.5Z" fill="#002889"/>
                </svg>
            </a>
        </section>

    </section>


</footer>
<!-- FOOTER  -->

<!-- FIXME: enqueue with wordpress function -->
<!-- <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"
></script> -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>
</html>

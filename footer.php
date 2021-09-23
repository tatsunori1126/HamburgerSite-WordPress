    <footer class="l-footer">
        <ul class="p-footer__menu">
            <?php
                // カスタムメニューの「メニューの位置」を'side'にしているのでその内容をサイドバーに表示
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container' => 'nav',
                    'container_class' => 'footer-class'
                ));
            ?>
        </ul>
        <p class="copyright">Copyright: <?php bloginfo( 'name' ); ?>2021</p>
    </footer>
</div>
    <?php wp_footer(); ?>   <!-- WordPressでは記入必須 -->
</body>
</html>
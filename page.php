<?php get_header(); ?>  <!-- ヘッダーの読み込み -->
        <!-- サイドバー -->
        <?php get_sidebar(); ?> <!-- サイドバーの読み込み -->
        <!-- メイン -->
        <!-- WordPressループ -->
        <div class="l-page-main">
            <div class="p-page-top-visual">
                <h1><?php the_title(); ?></h1>  <!-- 固定ページのタイトルを表示 -->
            </div>
            <div class="p-page-menu-top">
            <?php
            if (have_posts() ) :
                while(have_posts() ) : the_post();
            ?>
                <?php the_content(); ?>
            <?php
                endwhile;
            endif;
            ?>
            </div>
        </div>
                
        <!-- フッター -->
<?php get_footer(); ?>  <!-- フッターの読み込み -->
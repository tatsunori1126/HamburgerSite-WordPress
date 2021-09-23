<?php get_header(); ?>  <!-- ヘッダーの読み込み -->
<!-- サイドバー -->
<?php get_sidebar(); ?> <!-- サイドバーの読み込み -->
<!-- メイン -->
<div class="l-single-main">
    <div class="p-single-top-visual">
        <?php the_post_thumbnail(); ?>  <!-- 各商品の投稿のアイキャッチ画像を投稿ページのトップ画像に表示 -->
        <h1><?php the_title(); ?></h1>  <!-- 選択した商品の投稿タイトルを表示 -->
    </div>
    <?php
    if (have_posts() ) :
        while(have_posts() ) : the_post();
    ?>
    <div class="p-single-main__heading-text">
        <h2 class="p-single-main-text"><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>      
</div>
    <?php
        endwhile;
    endif;
    ?>
<!-- フッター -->
<?php get_footer(); ?>  <!-- フッターの読み込み -->
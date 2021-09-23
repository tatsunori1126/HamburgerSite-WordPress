<?php get_header(); ?>  <!-- ヘッダーの読み込み -->
<?php get_sidebar(); ?> <!-- サイドバーの読み込み -->
<!-- メイン -->
<div class="l-archive-main">
    <div class="p-archive-top-back">
        <div class="p-archive-top-visual">
            <h2>Menu:</h2>
            <p><?php single_cat_title(); ?></p>  <!-- カテゴリー名を取得して表示させる -->
        </div>
    </div>
    <div class="p-archive-menu-top">
        <div class="p-archive-main__heading-text">
            <h3>小見出しが入ります</h3>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
    </div>
    <!-- ハンバーガーなどの商品の投稿をループさせる -->
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <section class="p-archive-main-visual">
            <div class="p-archive-burger-menu">
                <?php if ( has_post_thumbnail() ): ?>   <!-- アイキャッチ画像を表示させる -->
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
                <div class="p-archive-menu_introduction">
                    <div class="p-archive-menu_introduction_sub">
                        <h4><?php the_title(); ?></h4>  <!-- 投稿のタイトルを表示させる -->
                        <?php the_excerpt(); ?> <!-- 投稿の抜粋を表示させる -->
                    </div>
                    <div class="p-archive-detail">
                        <a href="<?php the_permalink(); ?>">詳しく見る</a>  <!-- クリックした商品の投稿ページへ -->
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="p-arrow">
        <div class="p-pagination">
            <?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>
        </div>
    </div>
</div>    
<!-- フッター -->
<?php get_footer(); ?>  <!-- フッターの読み込み -->
        
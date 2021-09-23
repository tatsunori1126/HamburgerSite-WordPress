<?php get_header(); ?>
<!-- サイドバー -->
<?php get_sidebar(); ?>
<!-- メイン -->
<div class="l-search-main">
    <div class="p-search-top-back">
        <div class="p-search-top-visual">
            <h2>Search:</h2>
            <p><?php the_search_query(); ?></p>
        </div>
    </div>
    <div class="p-search-menu-top">
        <div class="p-search-main__heading-text">
            <h3><?php the_search_query(); ?>の検索結果</h3>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
    </div>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <section class="p-search-main-visual">
            <div class="p-search-burger-menu">
                <?php if ( has_post_thumbnail() ): ?>   <!-- アイキャッチ画像を表示させる -->
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
                <div class="p-search-menu_introduction">
                    <div class="p-search-menu_introduction_sub">
                        <h4><?php the_title(); ?></h4>  <!-- 投稿のタイトルを表示させる -->
                        <?php the_excerpt(); ?> <!-- 投稿の抜粋を表示させる -->
                    </div>
                    <div class="p-search-detail">
                        <a href="<?php the_permalink(); ?>">詳しく見る</a>  <!-- クリックした商品の投稿ページへ -->
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
        <?php else: ?>
        <div class="no-result">
            <p>検索結果はありませんでした</p>
        </div>
    <?php endif; ?>
    <div class="p-arrow">
        <div class="p-pagination">
            <?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>
        </div>
    </div>
</div>
<!-- フッター -->
<?php get_footer(); ?>

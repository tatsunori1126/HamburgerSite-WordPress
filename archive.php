<?php get_header(); ?>  <!-- ヘッダーの読み込み -->
        <!-- サイドバー -->
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
                <div class="p-arrow-left-block">
                    <p class="p-page-display">Page 1/10</p>
                    <a class="p-arrow-logo" href="#"><div class="p-left-arrow"></div></a>
                    <a class="p-arrow-text p-arrow-before-text" href="#">前へ</a>
                </div>
                <div class="p-pagination">
                    <ul class="p-pagination-box">
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">1</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">2</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">3</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">4</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">5</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">6</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">7</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">8</a></li>
                        <li class="p-pagination-namber"><a class="p-pagination-link" href="#">9</a></li>
                    </ul>
                </div>
                <div class="p-arrow-right-block">
                    <a class="p-arrow-text p-arrow-next-text" href="#">次へ</a>
                    <a class="p-arrow-logo" href="#"><div class="p-right-arrow"></div></a>
                </div>
            </div>
        </div>
        <!-- フッター -->
<?php get_footer(); ?>  <!-- フッターの読み込み -->
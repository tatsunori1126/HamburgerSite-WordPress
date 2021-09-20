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
                <?php get_footer(); ?>
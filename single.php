<?php get_header(); ?>  <!-- ヘッダーの読み込み -->
        <!-- サイドバー -->
        <?php get_sidebar(); ?> <!-- サイドバーの読み込み -->
        <!-- メイン -->
        <div class="l-single-main">
            <div class="p-single-top-visual">
                <?php the_post_thumbnail(); ?>  <!-- 各商品の投稿のアイキャッチ画像を投稿ページのトップ画像に表示 -->
                <h1><?php the_title(); ?></h1>  <!-- 選択した商品の投稿タイトルを表示 -->
            </div>
            <div class="p-single-menu-top">
                <div class="p-single-main__heading-text">
                    <h2>見出しh2</h2>
                    <p class="ptag-text">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                    <h3>見出しh3</h3>
                    <h4>見出しh4</h4>
                    <h5>見出しh5</h5>
                    <h6>見出しh6</h6>
                    <div class="citation-block">
                        <p class="blockquote">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                        <p class="source">出典元：<a href="#">○○○○○○○○○○○○</a></p>
                    </div>
                </div>
                <div class="p-single-main-visual">
                    <img class="top-img" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img01.png" alt="ハンバーガーの写真">
                    <section class="p-single-left-img-box">
                        <img class="left-img" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img02.png" alt="ハンバーガーの写真">
                        <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    </section>
                    <section class="p-single-right-img-box">
                        <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                        <img class="right-img" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img02.png" alt="ハンバーガーの写真">
                    </section>
                    <img class="center-img" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img02.png" alt="ハンバーガーの写真">
                    <div class="img-group">
                        <img class="img-group-solo" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img02.png" alt="ハンバーガーの写真">
                        <img class="img-group-solo" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img02.png" alt="ハンバーガーの写真">
                        <img class="img-group-solo" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img02.png" alt="ハンバーガーの写真">
                        <img class="img-group-solo" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img02.png" alt="ハンバーガーの写真">
                        <img class="img-group-solo" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img02.png" alt="ハンバーガーの写真">
                        <img class="img-group-solo" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img02.png" alt="ハンバーガーの写真">
                        <img class="img-group-solo" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img02.png" alt="ハンバーガーの写真">
                        <img class="img-group-solo" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img02.png" alt="ハンバーガーの写真">
                        <img class="img-group-solo" src="<?php echo get_template_directory_uri(); ?>/images/single_main_img02.png" alt="ハンバーガーの写真">
                    </div>
                </div>
                <div class="p-list-text">                
                    <div class="p-list-group-number">
                        <ul>
                            <li>1.リストリストリスト<br>
                                2.リストリストリスト</li>
                            <li>1.リスト2リスト2リスト2<br>
                                2.リスト2リスト2リスト2</li>
                            <li>1.リストリストリスト<br>
                                2.リストリストリスト</li>
                        </ul>
                    </div>
                    <div class="p-list-group-normal">
                        <ul>
                            <li>リストリストリスト<br>
                                リストリストリスト</li>
                            <li>リスト2リスト2リスト2<br>
                                リスト2リスト2リスト2</li>
                            <li>リストリストリスト<br>
                                リストリストリスト</li>
                        </ul>
                    </div>
                    <div class="p-list-group-code">
                        <p class="html-open">&lt;html&gt;</p>
                        <div class="p-list-group-code-sub">
                            <p class="head-open">&lt;head&gt;</p>
                            <p class="head-close">&lt;/head&gt;</p>
                            <p class="body-open">&lt;body&gt;</p>
                            <p class="body-close">&lt;/body&gt;</p>
                        </div>
                        <p class="html-close">&lt;/html&gt;</p>
                    </div>
                    <table class="p-table-box">
                        <tr>
                            <td class="p-table-box-short">テーブル</td><td class="p-table-box-long">テーブル</td>
                        </tr>
                        <tr>
                            <td class="p-table-box-short">テーブル</td><td class="p-table-box-long">テーブル</td>
                        </tr>
                        <tr>
                            <td class="p-table-box-short">テーブル</td><td class="p-table-box-long">テーブル</td>
                        </tr>
                        <tr>
                            <td class="p-table-box-short">テーブル</td><td class="p-table-box-long">テーブル</td>
                        </tr>
                    </table>
                </div>
                <form action="#" class="p-single-form">
                    <input type="submit" class="c-button--submit" value="ボタン">
                </form>
                <p class="bold-text">boldboldboldboldboldboldbold</p>
            </div>
        </div>
        <!-- フッター -->
<?php get_footer(); ?>  <!-- フッターの読み込み -->
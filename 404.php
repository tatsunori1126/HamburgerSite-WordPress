    <?php get_header(); ?>  <!-- header.phpを読み込む -->
    <!-- サイドバー -->
    <?php get_sidebar(); ?> <!-- sidebar.phpを読み込む -->
    <!-- メイン -->
    <div class="l-error-404-main">
        <div class="error-404">
            <h2 class="error-404-title">お探しのページが見つかりませんでした<br>（404 ERROR）</h2>
            <p>申し訳ございませんが、<a href="<?php echo esc_url( home_url( '/' ) ); ?>">こちらのリンク</a>からトップページにお戻り下さい。</p>
        </div>
    </div>
    <!-- フッター -->
    <?php get_footer(); ?>  <!-- footer.phpを読み込む -->
<form action="<?php echo esc_url( home_url('/') ); ?>" method="get" class="p-search-form">
    <input type="search" name="s" id="s" class="c-input--keyword" placeholder="&#xf002" value="<?php the_search_query() ?>">
    <input type="submit" class="c-button--submit" value="検索">
</form>
<?php
/**
 * 記事詳細ページの振り分けファイル
 */

// 1. 「ブログ」カテゴリー（スラッグが blog の場合）
if ( in_category( 'blog' ) ) {
    include( TEMPLATEPATH . '/custom-staffblog.php' );

// 2. 「お知らせ」カテゴリー（スラッグが news の場合）
} elseif ( in_category( 'news' ) ) {
    include( TEMPLATEPATH . '/custom-newsdeta.php' );

// 3. 「患者様の声」カテゴリー（スラッグが voice の場合）
} elseif ( in_category( 'customer-voice' ) ) {
    include( TEMPLATEPATH . '/custom-voice.php' );

// 4. その他（万が一どれにも当てはまらない場合）
} else {
    get_header();
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    get_footer();
}
?>
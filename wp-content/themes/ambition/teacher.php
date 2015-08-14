//例えば、カテゴリー：news の記事一覧を取得する場合
//news.php に下記を記述(ファイル名は任意の名前)
<div>
  <?php $blog_posts = query_posts('category_name=teacher&showposts=4');
  foreach($blog_posts as $post): ?>
  <p><?php echo get_post_time('Y.m.d'); ?></p>
  <p><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></p>
  <?php endforeach; ?>
</div>
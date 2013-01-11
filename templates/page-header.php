
    <?php
      if (is_home()) {
        /*if (get_option('page_for_posts', true)) {
          echo get_the_title(get_option('page_for_posts', true));
        } else {
          _e('Latest Posts', 'roots');
        }*/
      } elseif (is_archive()) {
        printf('<div class="page-header"><h1>');
        $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
        if ($term) {
          echo $term->name;
        } elseif (is_post_type_archive()) {
          echo get_queried_object()->labels->name;
        } elseif (is_day()) {
          printf(__('Daily Archives: %s', 'roots'), get_the_date());
        } elseif (is_month()) {
          printf(__('Monthly Archives: %s', 'roots'), get_the_date('F Y'));
        } elseif (is_year()) {
          printf(__('Yearly Archives: %s', 'roots'), get_the_date('Y'));
        } elseif (is_author()) {
          global $post;
          $author_id = $post->post_author;
          printf(__('Author Archives: %s', 'roots'), get_the_author_meta('display_name', $author_id));
        } else {
          single_cat_title();
        }
        printf('</h1></div>');
      } elseif (is_search()) {
        printf('<div class="page-header"><h1>');
        printf(__('Search Results for %s', 'roots'), get_search_query());
        printf('</h1></div>');
      } elseif (is_404()) {
        printf('<div class="page-header"><h1>');
        _e('File Not Found', 'roots');
        printf('</h1></div>');
      } else {
        printf('<div class="page-header"><h1>');
        the_title();
        printf('</h1></div>');
      }
    ?>


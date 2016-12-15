<?php
/**
 *Template Name: Donate Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Teen_Empowerment
 */

get_header(); ?>
<section class="wrapper flexbox">
  <?php
  //Set current page category
  $category = get_category(get_query_var('cat'), false);
  $cat_id = $category->cat_ID;
  // Query for all of the posts that have same category as the current page
   $args = array(
   // Arguments for your query.
   'category_name' => 'Donate'
   );

  // Custom query.
       $query = new WP_Query($args);
       // Check that we have query results.
         if ( $query->have_posts() ) {
           // Start looping over the query results.
           while ($query->have_posts()) {
             $query->the_post();
               if (has_tag('donate-post')) {
                 echo '<article class = "donate-post">';
                 echo '<h2>'.get_the_title().'</h2>';
                 echo '<div class= "donate-content">';
                 echo '<p>'.the_content().'</p>';
                 echo '</div>';
                 echo '</article>';
                 ?>
                 <article class="donate-form">
                           <form action="/my-handling-form-page" method="post">
                               <div>
                                   <label for="name">Name</label>
                                   <input class="long-input" type="text" id="name" name="user_name" />
                               </div>
                               <div>
                                   <label for="mail">Email</label>
                                   <input class="long-input" type="email" id="mail" name="user_mail" />
                               </div>
                               <div>
                                   <label for="org">Organization</label>
                                   <input class="long-input" type="text" id="org" name="user_organization">
                               </div>
                               <div>
                                   <label for="donation">Donation Amt</label>
                                   <input class="sm-input"  type="text" id="donation" name="user_donation">
                               </div>
                               <a href="#" class="donate-button-border">DONATE</a>
                           </form>
                       </article>
                 <?php
                 echo '<div class= "donate-image">';
                 $thumb_id = get_post_thumbnail_id();
                 $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                 $thumb_url = $thumb_url_array[0];
                 if (has_post_thumbnail()) {
                   echo the_post_thumbnail('full');
                 }
                 echo '</div>';
               }

             }
           }

    
       // Restore original post data.
       wp_reset_postdata();
      ?>

</section>
<?php get_footer(); ?>

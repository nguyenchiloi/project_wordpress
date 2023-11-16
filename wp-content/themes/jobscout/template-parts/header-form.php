<?php
/**
 *
 * Creating a custom job search form for homepage
 * The [jobs] shortcode is will use search_location and search_keywords variables from the query string.
 *
 * @link https://wpjobmanager.com/document/tutorial-creating-custom-job-search-form/
 *
 * @package JobScout
 */
$find_a_job_link = get_option('job_manager_jobs_page_id', 0);
$post_slug = get_post_field('post_name', $find_a_job_link);
$ed_job_category = get_option('job_manager_enable_categories');

if ($post_slug) {
  $action_page = home_url('/' . $post_slug);
} else {
  $action_page = home_url('/');
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="job_listings ">

  <form class="jobscout_job_filters" method="GET" action="<?php echo esc_url($action_page) ?>">
    <div class="search_jobs row" style="margin-left:10px">

      <div class="search_keywords col-md-7 d-flex">

        <i class="fa fa-search" style="padding-top: 20px;
    padding-bottom: 16px;
    background: white;
    padding-left: 10px;
    font-size: 24px;
    color: orange;"></i>
        <input type="text" id="search_keywords" name="search_keywords"
          placeholder="<?php esc_attr_e('Keywords', 'jobscout'); ?>">
      </div>

      <div class="search_location col-md-3 d-flex">
        <i class="fa-solid fa-location-dot" style="padding-top: 20px;
    padding-bottom: 16px;
    background: white;
    padding-left: 10px;
    font-size: 24px;
    color: orange; padding-right:5px">></i>
        <!-- <input type="text"  id="search_location" name="search_location" placeholder="<?php //esc_attr_e( 'Location', 'jobscout' ); ?>"> -->
          <?php
          global $wpdb;
          $table = $wpdb->prefix . 'postmeta';
          $sql = "SELECT DISTINCT SUBSTRING_INDEX(`meta_value`,',',-1) as location FROM `wp_postmeta` WHERE `meta_key` like '%location%' ORDER BY location";
          $data = $wpdb->get_results($wpdb->prepare($sql));
          ?>

          <select id="search_location" name="search_location" value="Khu vực">
            <option value="">Khu vực</option>
            <?php foreach ($data as $value): ?>
              <option value="<?php echo $value->location; ?>">
                <?php echo $value->location; ?>
              </option>
            <?php endforeach ?>
          </select>

      </div>

      <?php if ($ed_job_category) { ?>
        <div class="search_categories custom_search_categories">
          <label for="search_category">
            <?php esc_html_e('Job Category', 'jobscout'); ?>
          </label>
          <select id="search_category" class="robo-search-category" name="search_category">
            <option value="">
              <?php _e('Select Job Category', 'jobscout'); ?>
            </option>
            <?php foreach (get_job_listing_categories() as $jobcat): ?>
              <option value="<?php echo esc_attr($jobcat->term_id); ?>">
                <?php echo esc_html($jobcat->name); ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>
      <?php } ?>

      <div class="search_submit col-md-2" style="padding-left:0px;padding-right:0px">
        <input type="submit" value="<?php esc_attr_e('SEARCH JOB', 'jobscout'); ?>" />
      </div>

    </div>
  </form>

</div>
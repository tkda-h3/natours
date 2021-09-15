<?php

class NatoursOption
{
  protected $section_name = 'natours_first_section';
  protected $slug = 'natours-setting';
  protected $settings_group_name = 'natours_first_group';

  function __construct()
  {
    add_action('admin_menu', array($this, 'adminPage'));
    add_action('admin_init', array($this, 'settings'));
    // add_filter('the_content', array($this, 'ifWrap'));
  }

  function adminPage()
  {
    add_options_page(
      'natours-h3テーマのオプション', // title
      'natours setting', // メニューのアンカーテキスト
      'manage_options',  // 権限(capability)
      $this->slug, // slug
      array($this, 'admin_html') // 中身
    );
  }

  function admin_html(){
    ?>
    <div class="wrap">
			<h1>Word Count Settings</h1>
			<form action="options.php" method="POST"><!-- options.phpにPOSTするのは規定 -->
				<?php
				settings_fields($this->settings_group_name); // group名。セキュリティやロールなどをよしなにやってくれる
				do_settings_sections($this->slug); // slug name
				submit_button();
				?>
			</form>
		</div>
    <?php 
  }

  function settings()
  {
    add_settings_section(
      $this->section_name, // section name
      null, // 挿入したい subtitle
      null, // 挿入したい content
      $this->slug // page slug name
    );

    // Tour一覧件数
    add_settings_field(
      'natours_tour_posts_per_page', // option name
      'ツアー一覧ページの表示件数', // display name
      array($this, 'input_number'), // function outputting html
      $this->slug, // page slug
      $this->section_name, // section
      array(
        'name' => 'natours_tour_posts_per_page',
        'attrs' => array(
          'min' => 1,
          'max' => 99,
        )
      ),
    );
    register_setting(
      $this->settings_group_name, // group belonging to
      'natours_tour_posts_per_page', // option name
      array(
        'sanitize_callback' => function($input){ 
          return $this->sanitize_input_number($input, array(
            'name' => 'natours_tour_posts_per_page',
            'min' => 1,
            'max' => 99,
          ));
        },
        'default' => 10,
      )
    );

    // Story一覧件数
    add_settings_field(
      'natours_story_posts_per_page', // option name
      'ストーリー一覧ページの表示件数', // display name
      array($this, 'input_number'), // function outputting html
      $this->slug, // page slug
      $this->section_name, // section
      array(
        'name' => 'natours_story_posts_per_page',
        'attrs' => array(
          'min' => 1,
          'max' => 99,
        )
      ),
    );
    register_setting(
      $this->settings_group_name, // group belonging to
      'natours_story_posts_per_page', // option name
      array(
        'sanitize_callback' => function($input){ 
          return $this->sanitize_input_number($input, array(
            'name' => 'natours_story_posts_per_page',
            'min' => 1,
            'max' => 99,
          ));
        },
        'default' => 10,
      )
    );

  }

  function input_number($args)
  {
    $attr_str = '';
    foreach((isset($args['attrs']) ? $args['attrs'] : array()) as $k => $v){
      $attr_str .= $k . '="' . $v . '" ';
    }
?>
    <input type="number" name="<?php echo $args['name'] ?>" value="<?php echo get_option($args['name'], 1); ?>" <?php echo $attr_str; ?>>
<?php
  }

  function sanitize_input_number($input, $args){
    $min = isset($args['min']) ? $args['min'] : 1;
    $max = isset($args['max']) ? $args['max'] : 99;
    if(isset($args['min']) and $input < $args['min']){
      add_settings_error($args['name'], $args['name'] . '_error', '1 - 99で指定してください');
      return get_option($args['name']);
    }
    if(isset($args['max']) and $input > $args['max']){
      add_settings_error($args['name'], $args['name'] . '_error', '1 - 99で指定してください');
      return get_option($args['name']);
    }
    return $input;
  }
}

$natours_option = new NatoursOption();

?>
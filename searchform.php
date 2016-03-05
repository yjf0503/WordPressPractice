/**
 * Created by PhpStorm.
 * User: jiefuyang
 * Date: 3/5/16
 * Time: 7:35 PM
 */
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">

<div>

	<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" size="15" /><br />

	<input type="submit" id="searchsubmit" value="Search" />

</div>

</form>
<?php
/**
 * Copyright 2010, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<?php
Configure::write('debug', 0);
$status = (isset($status)) ? $status : 'success';
?>{ "status" : "<?php echo $status?>", "data" : <?php echo $content_for_layout; ?> }
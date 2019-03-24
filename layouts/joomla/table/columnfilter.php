<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

extract($displayData);

/** @var Table $table */
$columns = $displayData['columns'];
$id = $displayData['id'];
$name = $displayData['name'];

?>
<div class="dropdown pull-right">
	<a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="fa fa-filter" title="Filter"></span>
	</a>
	<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
		<form class="px-4 py-3">
			<div class="form-group">
				<?php foreach ($columns as $key => $name) : ?>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="dropdownCheck" name="visibleFields[]" value="<?php echo $this->escape($key); ?>" checked>
					<label class="form-check-label" for="dropdownCheck">
						<?php echo $this->escape($name); ?>
					</label>
				</div>
				<?php endforeach; ?>
			</div>

		</form>
	</div>
</div>

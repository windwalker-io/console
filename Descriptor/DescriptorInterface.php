<?php
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2008 - 2014 Asikart.com. All rights reserved.
 * @license    GNU Lesser General Public License version 2.1 or later.
 */

namespace Windwalker\Console\Descriptor;

/**
 * Interface of Descriptor.
 *
 * @since  2.0
 */
interface DescriptorInterface
{
	/**
	 * Add an item to describe.
	 *
	 * @param   mixed  $item  The item you want to describe.
	 *
	 * @return  DescriptorInterface  Return this object to support chaining.
	 *
	 * @since  2.0
	 */
	public function addItem($item);

	/**
	 * Render all items description.
	 *
	 * @return  string  Rendered result.
	 *
	 * @since   2.0
	 */
	public function render();
}

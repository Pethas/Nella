<?php
/**
 * Nella
 *
 * Copyright (c) 2006, 2010 Patrik Votoček (http://patrik.votocek.cz)
 *
 * This source file is subject to the "New BSD License" that is bundled
 * with this package in the file nella.txt.
 *
 * For more information please see http://nellacms.com
 *
 * @copyright  Copyright (c) 2006, 2010 Patrik Votoček
 * @license    http://nellacms.com/license  New BSD License
 * @link       http://nellacms.com
 * @category   Nella
 * @package    Nella\Components\Editor
 */

namespace Nella\Components\Editor;

use Nella\Nella;

/**
 * Admin menu component
 *
 * @author     Patrik Votoček
 * @copyright  Copyright (c) 2006, 2010 Patrik Votoček
 * @package    Nella\Components\Editor
 */
class Editor extends \Nette\Application\Control
{
	/**
	 * Render admin menu
	 *
	 * @return	string
	 */
	public function render()
	{
		$this->template->lang = $this->getPresenter()->lang;
		$this->template->setFile(__DIR__ . "/".Nella::getOption("editor").".phtml");
		$this->template->render();
	}
}
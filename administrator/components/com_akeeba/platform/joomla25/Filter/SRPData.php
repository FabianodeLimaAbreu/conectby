<?php
/**
 * Akeeba Engine
 * The modular PHP5 site backup engine
 * @copyright Copyright (c)2009-2014 Nicholas K. Dionysopoulos
 * @license   GNU GPL version 3 or, at your option, any later version
 * @package   akeebaengine
 *
 */

namespace Akeeba\Engine\Filter;

// Protection against direct access
defined('AKEEBAENGINE') or die();

use Akeeba\Engine\Factory;

/**
 * System Restore Point - Database Tables
 */
class SRPData extends Base
{
	protected $params = array();

	function __construct()
	{
		$this->object = 'dbobject';
		$this->subtype = 'all';
		$this->method = 'api';
		$this->filter_name = 'SRPData';

		if (Factory::getKettenrad()->getTag() != 'restorepoint')
		{
			$this->enabled = false;
		}
		else
		{
			$this->init();
		}
	}

	private function init()
	{
		// Fetch the configuration
		$config = Factory::getConfiguration();

		$this->params = array(
			'name'          => $config->get('core.filters.srp.name', 'name'),
			'extraprefixes' => $config->get('core.filters.srp.extraprefixes', array()),
			'customtables'  => $config->get('core.filters.srp.customtables', array()),
			'skiptables'    => $config->get('core.filters.srp.skiptables', array())
		);

	}

	protected function is_excluded_by_api($test, $root)
	{
		$barename = (substr($test, 0, 3) == '#__') ? substr($test, 3) : $test;

		// Is it one of our customtables?
		if (in_array($barename, $this->params['customtables']))
		{
			return false;
		}

        // Does it start with the name prefix?
        foreach($this->params['name'] as $name)
        {
            if (strpos($barename, $name . '_') === 0)
            {
                return false;
            }
        }

		// Does it start with any of our extra prefixes?
		foreach ($this->params['extraprefixes'] as $prefix)
		{
			if (substr($prefix, -1) != '_')
			{
				$prefix .= '_';
			}
			if (strpos($barename, $prefix) === 0)
			{
				return false;
			}
		}

		// Exclude all other tables
		return true;
	}
}
<?php
/**
 * @package ZShapeTech_Slider
 * @author ZShapeTech <zshapetech@gmail.com>
 * @license http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version $Id$
 */
namespace ZShapeTech\Core\Helper;
use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper {
	
	/**
	 * Retrieve config value by path
	 * 
	 * @param string $path
	 * @return string
	 */ 
	public function getConfigValue($path)
	{
		return $this->scopeConfig->getValue($path);
	}
}

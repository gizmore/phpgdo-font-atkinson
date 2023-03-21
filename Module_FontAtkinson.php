<?php
namespace GDO\FontAtkinson;

use GDO\Core\GDO_Module;
use GDO\Core\GDT_Checkbox;

final class Module_FontAtkinson extends GDO_Module
{

	public string $license = 'Atkinson';

	public function getConfig(): array
	{
		return [
			GDT_Checkbox::make('use_globally')->initial('1'),
		];
	}

	public function onLoadLanguage(): void { $this->loadLanguage('lang/atkinson'); }

	public function onIncludeScripts(): void
	{
		$this->addCSS('css/atkinson.css');
		if ($this->cfgUseGlobally())
		{
			$this->addCSS('css/use_atkinson.css');
		}
	}

	public function cfgUseGlobally(): bool { return $this->getConfigValue('use_globally'); }

	public function getLicenseFilenames(): array
	{
		return [
			'ATKINSON_LICENSE.md',
		];
	}

}

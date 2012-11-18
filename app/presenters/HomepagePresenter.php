<?php

/**
 * Zobrazeni webiku JI
 */
class HomepagePresenter extends BasePresenter
{

	/**
	 * zkontroluje, zda-li dany View existuje
	 *
	 * @author Vitek Jezek
	 **/
	public function beforeRender()
	{
		$templateFile = NULL;
		$template = $this->getTemplate();
		if ($template && $template instanceof Nette\Templating\IFileTemplate && !$template->getFile())
		{
			$files = $this->formatTemplateFiles();
			foreach ($files as $file)
			{
				if (is_file($file))
				{
					$templateFile = $file;
					break;
				}
			}

			if (!$templateFile)
			{
				$file = preg_replace('#^.*([/\\\\].{1,70})$#U', "\xE2\x80\xA6\$1", reset($files));
				$file = strtr($file, '/', DIRECTORY_SEPARATOR);
				$this->flashMessage("V listopadu 2012 jsme sputili nový web. Stránku, kterou hledáte, jsme nejspíše přesunuli či úplně zrušili. Doufáme, že hledané informace najdete i na našich nových stránkách.");
				$this->redirect("default");
			}
		}

		parent::beforeRender();
	}
}

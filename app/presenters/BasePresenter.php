<?php

/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

	/**
	 * nastavi zakladni hodnoty do sablony
	 *
	 * @author Vitek Jezek
	 **/
	public function beforeRender()
	{
		$texy = new Texy();
		$this->template->registerHelper('texy', callback($texy, 'process'));

		$this->template->urlToCompetitionSystem = $this->context->parameters['urlToCompetitionSystem'];
		
		NetteLink::$function = callback($this, 'link');
	}

}

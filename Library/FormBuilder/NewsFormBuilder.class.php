<?php
namespace Library\FormBuilder;

class NewsFormBuilder extends \Library\FormBuilder
{
	public function build()
	{
		$this->form->add(new \Library\HiddenField(array(
														'name' => 'auteur',
														)))
					->add(new \Library\HiddenField(array(
														'name' => 'editeur',
														)))
					->add(new \Library\HiddenField(array(
														'name' => 'archive',
														)))
					->add(new \Library\LineEditField(array(
															'label' => 'Titre',
															'name' => 'titre',
															'maxLength' => 255,
															'validators' => array(
															new \Library\MaxLengthValidator('Le titre spécifié est trop long (255 caractères maximum)', 255),
															new \Library\NotNullValidator('Merci de spécifier le titre de la news')
															)
															)))
					->add(new \Library\TextEditField(array(
														'label' => 'Contenu',
														'name' => 'contenu',
														'rows' => 8,
														'cols' => 60,
														'validators' => array(
														new \Library\NotNullValidator('Merci de spécifier le contenu de la news')
														)
														)))
					->add(new \Library\CheckboxField(array(
														'label' => 'News privée',
														'name' => 'privee',
														'title' => 'Seuls les membres du club robot validés pourront lire cette news'
														)));
	}
}
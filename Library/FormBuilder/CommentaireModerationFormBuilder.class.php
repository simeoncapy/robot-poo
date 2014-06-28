<?php
namespace Library\FormBuilder;

class CommentaireModerationFormBuilder extends \Library\FormBuilder
{
	public function build()
	{
		
		$this->form->add(new \Library\TextEditField(array(
															'label' => 'Message de modération',
															'name' => 'moderation',
															'rows' => 7,
															'cols' => 50,
															'validators' => array(
																					new \Library\NotNullValidator('Message vide')
																				  )
															)))
					->add(new \Library\CheckboxField(array(
														'label' => 'Supprimer le commentaire',
														'name' => 'supprime'
														)))
					->add(new \Library\HiddenField(array(
															'name' => 'news',
															)))
					->add(new \Library\HiddenField(array(
															'name' => 'contenu',
															)))
					->add(new \Library\HiddenField(array(
														'name' => 'auteur',
														)))
					->add(new \Library\HiddenField(array(
														'name' => 'editeur',
														)));
	}
}
<?php
namespace App\Controller;

class Contact extends \App\Page {

	public function action_index(){
        if ($this->request->is_ajax()) {
            $post = $this->request->post();
            $this->pixie->orm->get('ContactMessages')->create($post);
            $this->execute = false;
        }
		$this->view->subview = 'contact';
	}
	
}
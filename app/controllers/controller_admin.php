<?php

class Controller_admin extends Controller
{

	function action_index()
	{


	    $checkLogin = $this->user->checkLogin();
        $isAdmin = $this->user->isAdmin();

        if($isAdmin || $checkLogin) {
            $this->view->generate('admin_view.php', 'template_view.php');
            sleep(2);
            header("Location: /tasks/");
        } else{
            $this->view->generate('admin_login.php', 'template_view.php');
        }

	}
}

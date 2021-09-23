<?php

class Controller_Tasks extends Controller
{



	function action_index()
	{

        $this->model = new Model_Tasks();

	    if($_POST['newTask']){
            $this->model->set_data($_POST);
        }

	    $data = $this->model->get_data();
        $data['isAdmin'] = $this->user->isAdmin();

        $this->view->generate('tasks_view.php', 'template_view.php',$data);
	}

}

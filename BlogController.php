<?php

class BlogController extends AbstractController
{
    public function knowledges();
    {
    	$model = $this->getModel(BlogModel::class);
    	var_dump($model);
    	//$knowleges = $model->getKnowledges(compact($model));
    	//$this->render('view/knovleges.php');

    }

	public function page404()
	{
		http_response_code(404); 
		$this->render('view/page404.php');
	}

}
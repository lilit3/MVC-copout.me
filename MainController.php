<?php

// use Routing\Router;

class MainController extends AbstractController
{

	// protected $router;
	
	// public function __construct(Router $router)
 //    {
 //        $this->router = $router;
 //    }

	public function index()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getData();
		$this->render('view/index.php', $data);
	}

	public function aboutProject()
	{
		$model = $this->getModel(Model::class);
		$about = $model->getDataAbout();
		$this->render('view/aboutProject.php', $about);
	}

	public function topTen()
	{
		$model = $this->getModel(Model::class);
		$tenCopout = $model->getDataTen();
		$this->render('view/topTen.php', $tenCopout);
	}

	public function copout()
	{
        $id = filter_input(INPUT_GET, 'id');
		$model = $this->getModel(Model::class);
		$copout = $model->getDataCopout($id);
    
    if (!($copout)) {
      return $this->render('view/page404.php');
    }
		$this->render('view/copout.php', $copout);
	}

	public function page404()
	{
		http_response_code(404); 
		$this->render('view/page404.php');
	}

}
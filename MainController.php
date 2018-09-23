<?php

class MainController extends AbstractController
{
	public function index()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getData();
		$this->render('view/index.php', $data);
	}

	public function aboutProject()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getDataAbout();
		$this->render('view/aboutProject.php', $data);
	}

	public function topTen()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getDataTen();
		$this->render('view/topTen.php', $data);
	}

	public function addCopout()
	{
		$this->render('view/addCopout.php', []);
	}

	public function copout()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getDataCopout($_GET['id']);
		$this->render('view/copout.php', $data);
	}

	public function page404()
	{
		$this->render('view/page404.php', []);
	}
}
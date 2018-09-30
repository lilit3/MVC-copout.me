<?php

class BlogController extends AbstractController
{
    public function knowledges()
    {
    	   $model = $this->getModel(BlogModel::class);
    	   $knowledges = $model->getKnowledges();
    	   $this->render('view/knowledges.php', compact('knowledges'));

    }
  
  public function knowledge()
    {
          $id = filter_input(INPUT_GET, 'id');
    	   $model = $this->getModel(BlogModel::class);
    	   $knowledge = $model->getKnowledge($id);
    
    if (!$knowledge) {
       return $this->render('view/page404.php');
    }
    	   $this->render('view/knowledge.php', compact('knowledge'));
    }

}

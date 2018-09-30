<?php

class BlogModel
{
	private $knowledges = [
	    1 => ['title' => 'filter_input', 'description' => ' Принимает переменную извне PHP и, при необходимости, фильтрует ее'],
	    2 => ['title' => 'http_response_code', 'description' => ' Получает или устанавливает код ответа HTTP'],
	    3 => ['title' => 'compact', 'description' => ' Создает массив, содержащий названия переменных и их значения']
	];

	public function getKnowledges()
	{
		return $this->knowledges;
	}
  
  public function getKnowledge($id)
	{
    if (isset($this->knowledges[$id]))
    {
        return $this->knowledges[$id];
    }
	}
}
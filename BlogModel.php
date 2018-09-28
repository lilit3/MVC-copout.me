<?php

class BlogModel
{
	protected $knovledges = [
	    1 => ['title' => 'filter_input', 'description' => 'filter_input — Принимает переменную извне PHP и, при необходимости, фильтрует ее'],
	    2 => ['title' => 'http_response_code', 'description' => 'http_response_code — Получает или устанавливает код ответа HTTP'],
	    3 => ['title' => 'compact', 'description' => 'compact — Создает массив, содержащий названия переменных и их значения']
	];

	public function getKnowledges()
	{
		return $this->$knovledges;
	}
}
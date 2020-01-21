<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class IndexController
{
	public function index()
	{
		$array = [
			"Content" => ["Title"=>"Fork completed","message"=>"Hello world"],
			"date" => date("H:i:s")
		];
		return new JsonResponse($array);
	}
}
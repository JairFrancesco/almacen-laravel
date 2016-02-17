<?php

class QuestionController extends BaseController {

	public function showMyQuestions()
	{
		return View::make('questions.myquestions');
	}

}
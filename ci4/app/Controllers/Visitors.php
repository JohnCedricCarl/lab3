<?php

namespace App\Controllers;
use App\Models\VisitorsModel;

class Visitors extends BaseController
{
    public function index()
    {
        $model = model(VisitorsModel::class);

        $data = [
            'visitors'  => $model->getVisitors(),
            'title' => 'Visitors',
        ];

        return view('templates/header', $data)
            . view('visitors/index')
            . view('templates/footer');
    }
	
	public function join()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create Visitors Entry'])
                . view('visitors/join')   
                . view('templates/footer');
        }

        $post = $this->request->getPost(['fname', 'message']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'fname' => 'required|max_length[255]|min_length[3]',
            'message' => 'required|max_length[255]|min_length[3]',		
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Create Visitors Entry'])
                . view('visitors/join')
                . view('templates/footer');
        }

        $model = model(VisitorsModel::class);

        $model->save([
            'fname' => $post['fname'],
            'message' => $post['mesasge'],
        ]);

        return view('templates/header', ['title' => 'Create Visitors Entry'])
            . view('visitors/success')
            . view('templates/footer');
    }
}	
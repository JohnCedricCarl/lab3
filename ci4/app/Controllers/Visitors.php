<?php

namespace App\Controllers;

use App\Models\VisitorsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Visitors extends BaseController
{
    public function index()
    {
        $model = model(VisitorsModel::class);

        $data = [
            'visitors'  => $model->getvisitors(),
            'title' => 'Visitor Entries',
        ];

        return view('templates/header', $data)
            . view('visitors/index')
            . view('templates/footer');
    }

    public function view($slug = null)
    {
        $model = model(VisitorsModel::class);

        $data['visitors'] = $model->getVisitors($slug);

        if (empty($data['visitors'])) {
            throw new PageNotFoundException('Cannot find the visitors entry: ' . $slug);
        }

        $data['title'] = $data['visitors']['title'];

        return view('templates/header', $data)
            . view('visitors/view')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create a visitors entry'])
                . view('visitors/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['fname', 'message']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'fname' => 'required|max_length[255]|min_length[3]',
            'message'  => 'required|max_length[1000]|min_length[1]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Create a visitors entry'])
                . view('visitors/create')
                . view('templates/footer');
        }

        $model = model(VisitorsModel::class);

        $model->save([
            'fname' => $post['fname'],
            'slug'  => url_title($post['fname'], '-', true),
            'message'  => $post['message'],
        ]);

        return view('templates/header', ['title' => 'Create a visitors entry'])
            . view('visitors/success')
            . view('templates/footer');
    }
}
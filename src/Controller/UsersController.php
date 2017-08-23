<?php
namespace App\Controller;

use App\Controller\AppController;


class UsersController extends AppController
{

    public function index()
    {
        $this->loadModel('News');
        $news = $this->News->find('all', [
            'condition' => [
                'News.deleted' => 0
            ],
            'order' => ['News.uploaded_date' => 'DESC']
        ]);

        $languageType = $this->request->query('lang');

        foreach ($news as $val) {
            if (empty($languageType) || $languageType == 'eng') {
                $val['title'] = $val['eng_title'];
            } elseif ($languageType == 'jp') {
                $val['title'] = $val['jp_title'];
            }
        }

        /*cakephp 3 find data from the database.
            $news = $this->News->find('all')
                         ->where(['News.deleted' => 0])
                         ->order(['News.uploaded_date' => 'DESC']);
        */

        $this->set(compact('news'));
    }

}

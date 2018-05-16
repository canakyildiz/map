<?php

namespace kouosl\map\controllers\backend;

use kouosl\map\models\SLider;

class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    
    public function actionIndex()
    {
        $map = new Map();
        return $this->render('index', [
            'map' => $map,
        ]);
    }
}

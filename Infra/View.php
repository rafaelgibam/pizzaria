<?php
/**
 * Created by PhpStorm.
 * User: rafaelgibam
 * Date: 21/03/2018
 * Time: 12:18
 */

namespace Infra;


class View
{
    private $view;

    public function __construct($view)
    {
        $this->view = $view;
    }
}
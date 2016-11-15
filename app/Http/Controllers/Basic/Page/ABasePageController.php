<?php

/**
 * @project pip.
 * @since 8/22/2016 6:14 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Basic\Page;

use App\Http\Controllers\Controller;

abstract class ABasePageController extends Controller implements IPageController
{

    protected $pageHeading;

    protected $pageContent;

    protected $pageBreadCrumb;

    protected $lastPageBreadCrumb;

    public function index()
    {
        return view('home');
    }

}
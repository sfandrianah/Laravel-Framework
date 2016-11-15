<?php

/**
 * @project pip.
 * @since 8/22/2016 4:27 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Basic\Page;

interface IPageController {

    /**
     * The Default screen every single page
     * @return mixed
     */
    public function index();

    public function getIndexPage();
}

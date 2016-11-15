<?php
/**
 * @project pip.
 * @since 9/8/2016 2:44 PM
 * @author <a href = "fauzi.knightmaster.achmad@gmail.com">Achmad Fauzi</a>
 */

namespace App\Http\Controllers\Basic\Scaffolding;


interface IScaffolding
{

    public function getIndexView();

    public function getNewView();

    public function getEditView();

    public function getListView();

    public function getIndexPage();

    public function getNewPage();

    public function getEditPage();

    public function getListPage();

    public function save();

    public function update();

    public function delete();

    public function getSaveBody();

    public function getUpdateBody();
}
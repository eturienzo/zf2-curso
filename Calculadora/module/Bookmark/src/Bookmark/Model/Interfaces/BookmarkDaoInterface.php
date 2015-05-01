<?php
/**
 * Created by PhpStorm.
 * User: elena
 * Date: 29/04/2015
 * Time: 22:26
 */

namespace Bookmark\Model\Interfaces;


interface BookmarkDaoInterface
{
    public function findAll();
    public function getById($id);
    public function save($data);
    public function delete($id);
    public function update($data);
}
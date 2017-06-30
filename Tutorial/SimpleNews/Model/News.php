<?php
 
// These files to insert, update, delete and get data in the database.

namespace Tutorial\SimpleNews\Model;
use Magento\Framework\Model\AbstractModel;
/*

class News extends AbstractModel
*/
class News extends AbstractModel  //\Magento\Framework\Model\
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
    	//parent::_construct();
        $this->_init('Tutorial\SimpleNews\Model\Resource\News');
    }
}
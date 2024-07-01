<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Album for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Album\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Album\Model\Album;
use Zend\Db\TableGateway\TableGateway;

class AlbumController extends AbstractActionController
{

    public function indexAction()
    {
        $sm = $this->getServiceLocator();
        $adapter = $sm->get('Zend\Db\Adapter\Adapter');
        
        $tableGateway = new TableGateway('album', $adapter);

        $albums = $tableGateway->select()->toArray();

//         echo "<pre>";
//         print_r($albums);
//         echo "</pre>";
//         die();
        
        return['albums' => $albums];
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /album/album/foo
        return array();
    }
}

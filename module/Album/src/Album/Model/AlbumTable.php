<?php
namespace Album\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;

class AlbumTable
{
    protected $tableGateway;
    
    public function __construct()
    {
        $adapter = $this->getServiceLocator('Zend\Db\Adapter\Adapter');
        $resultSetPrototype = new ResultSet();
        $resultSetPrototype->setArrayObjectPrototype(new Album());
        $AlbumTableGateway = new TableGateway('album', $adapter, null);
        
        
        $this->tableGateway = $AlbumTableGateway;
//         $table = new AlbumTable($tableGateway);
//         return $table;
        
//         $this->tableGateway = $tableGateway;
    }
    
    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
}


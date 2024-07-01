<?php
namespace Album\Model;

class Album
{
    public $id;
    public $artist;
    public $title;
    
    public function exchangeArray($data)
    {
        $this->id = empty($data['id']) ? null : $data['id'];
        $this->artist = empty($data['artist']) ? null : $data['artist'];
        $this->title = empty($data['title']) ? null : $data['title'];
    }
}


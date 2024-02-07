<?php
    
namespace App\Models\NoSql;

class AbstractModel extends Connection
{

    protected $database = '';
    protected $collection = '';
    public function ping()
    {
        return $this->client()->selectDatabase('admin')->command(['ping' => 1]);
    }

    public function query()
    {
        return $this->client()->selectDatabase($this->database)->selectCollection($this->collection);
    }

    public function all($options = [])
    {
        return $this->query()->find([], $options);
    }

    public function find($filters = [], array $options = [])
    {
        return $this->query()->find($filters, $options);
    }
}
<?php
    
namespace App\Models\NoSql;
use MongoDB\Driver\ServerApi;

class Connection
{
    protected $apiVersion;
    public function __construct()
    {
        $this->connection();
        $this->boot();
    }
    protected function boot()
    {}

    public function client()
    {
        return $this->connection();
    }

    protected function connection()
    {
        $url = config('database.nosql.default.url');
        switch (config('database.nosql.client')) {
            case 'mongo':
            default:
                return $this->mongodb($url);
        }
    }

    private function mongodb($url)
    {
        $this->apiVersion = new ServerApi(ServerApi::V1);
        return new \MongoDB\Client($url, [], ['serverApi' => $this->apiVersion]);
    }
}
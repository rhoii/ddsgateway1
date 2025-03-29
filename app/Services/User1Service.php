<?php
namespace App\Services;

use App\Traits\ConsumesExternalService;

class User1Service
{
    use ConsumesExternalService;

    public $baseUri;

    /**
     * The secret to consume the User1 Service
     * @var string
     */
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.users1.base_uri');
        $this->secret = config('services.users1.secret');
    }

    public function obtainUsers1()
    {
        return $this->performRequest('GET', '/api/users');
    }

    public function createUser1($data)
    {
        return $this->performRequest('POST', '/api/users', $data);
    }

    public function getUser1($userId)
    {
        return $this->performRequest('GET', "/api/users/{$userId}");
    }

    public function updateUser1($userId, $data)
    {
        return $this->performRequest('PUT', "/api/users/{$userId}", $data);
    }

    public function deleteUser1($userId)
    {
        return $this->performRequest('DELETE', "/api/users/{$userId}");
    }
}

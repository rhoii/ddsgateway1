<?php
namespace App\Services;

use App\Traits\ConsumesExternalService;

class User2Service
{
    use ConsumesExternalService;

    /**
     * The base URI to consume the User2 Service
     * @var string
     */
    public $baseUri;

    /**
     * The secret to consume the User2 Service
     * @var string
     */
    public $secret;

    /**
     * User2Service constructor
     */
    public function __construct()
    {
        $this->baseUri = config('services.users2.base_uri');
        $this->secret = config('services.users2.secret');
    }

    /**
     * Obtain the full list of users from Site2
     * @return array
     */
    public function obtainUsers2()
    {
        return $this->performRequest('GET', '/api/users');
    }

    /**
     * Create a new user in Site2
     * @param array $data
     * @return array
     */
    public function createUser2($data)
    {
        return $this->performRequest('POST', '/api/users', $data);
    }

    /**
     * Get a user by ID from Site2
     * @param int $userId
     * @return array
     */
    public function getUser2($userId)
    {
        return $this->performRequest('GET', "/api/users/{$userId}");
    }

    /**
     * Update a user in Site2
     * @param int $userId
     * @param array $data
     * @return array
     */
    public function updateUser2($userId, $data)
    {
        return $this->performRequest('PUT', "/api/users/{$userId}", $data);
    }

    /**
     * Delete a user from Site2
     * @param int $userId
     * @return array
     */
    public function deleteUser2($userId)
    {
        return $this->performRequest('DELETE', "/api/users/{$userId}");
    }
}

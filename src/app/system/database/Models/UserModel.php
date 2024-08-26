<?php



class UserModel extends Model
{
    public array $fields = [
        'name',
        'email',
        'age',
        'password'
    ];

    public array $sessionFields = [
        'user_id',
        'token'
    ];

    public string $sessionTable = 'users_sessions';

    protected function getTable(): string
    {
        return 'users';
    }

    public function create(array $data): bool
    {
        $keys = array_keys($data);
        if (array_diff($keys, $this->fields)) {
            throw new Exception('Required fields missing');
        }

        $sql = $this->queryBuilder->insert($this->getTable(), $data)->getSql();
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute($this->queryBuilder->getValues());
        return $result;
    }

    public function getByEmail(string $email, array $fields = ['*']): ?object
    {
        $sql = $this->queryBuilder
            ->select($this->getTable(), $fields)
            ->where('email', $email)
            ->limit(1)
            ->getSql();

        $stmt = $this->db->prepare($sql);
        $stmt->execute($this->queryBuilder->getValues());
        $result = $stmt->fetch(PDO::FETCH_OBJ);

        return $result ?: null;
    }

    public function createUserSession(array $data): bool
    {
        $keys = array_keys($data);
        if (array_diff($keys, $this->sessionFields)) {
            throw new Exception('Required fields missing');
        }

        $sql = $this->queryBuilder->insert($this->sessionTable, $data)->getSql();
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($this->queryBuilder->getValues());
    }

    public function getUserSession(string $token): ?object
    {
        $sql = $this->queryBuilder->select($this->sessionTable, ['id', 'token', 'user_id'])
            ->where('token', $token)
            ->getSql();
        $stmt = $this->db->prepare($sql);
        $stmt->execute($this->queryBuilder->getValues());
        $result = $stmt->fetch(PDO::FETCH_OBJ);

        return $result ?: null;
    }

    public function deleteUserSession(int $userId): bool
    {
        $sql = $this->queryBuilder->delete($this->sessionTable)
            ->where('user_id', $userId)
            ->getSql();

        $stmt = $this->db->prepare($sql);
        return $stmt->execute($this->queryBuilder->getValues());
    }
}
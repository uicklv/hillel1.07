<?php



class UserModel extends Model
{
    public array $fields = [
        'name',
        'email',
        'age',
        'password'
    ];

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
}
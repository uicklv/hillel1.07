<?php

class UserController extends Controller
{
    use ArrayHelper, Test {
        ArrayHelper::test insteadof Test;
        Test::test as test2;
    }

    public function userExists(int $id)
    {
        $users = [1,2,3,4,5];

        return $this->inArray($id, $users);
    }

//    public function test(): void
//    {
//        echo 'Test from child' . PHP_EOL;
//    }
}
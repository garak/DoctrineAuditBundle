<?php

namespace DH\DoctrineAuditBundle\Tests\User;

use DH\DoctrineAuditBundle\User\User;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class UserTest extends TestCase
{
    public function testGetId()
    {
        $user = new User('1', 'john.doe');

        self::assertSame('1', $user->getId());
    }

    public function testGetUsername()
    {
        $user = new User('1', 'john.doe');

        self::assertSame('john.doe', $user->getUsername());
    }

    public function testGetIdOnEmptyUser()
    {
        $user = new User();

        self::assertNull($user->getId());
    }

    public function testGetUsernameOnEmptyUser()
    {
        $user = new User();

        self::assertNull($user->getUsername());
    }
}

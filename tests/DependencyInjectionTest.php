<?php
use PHPUnit\Framework\TestCase;
use Paterns\Structural\DependencyInjection\User;
use Paterns\Structural\DependencyInjection\Post;

class DependencyInjectionTest extends TestCase
{
    public function testCanCreatePost() {
        $user = new User();
        $user->setUsername("ahmed");
        $user->setAge(12);
        $post = new Post($user);
        $this->assertInstanceOf(User::class, $post->getUser());
    }
}
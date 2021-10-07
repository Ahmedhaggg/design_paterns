<?php

namespace Paterns\Structural\DependencyInjection;
use Paterns\Structural\DependencyInjection\User;

class Post
{
    private string $postTitle;
    private string $postContent;
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param string $postContent
     */
    public function setPostContent(string $postContent): void
    {
        $this->postContent = $postContent;
    }

    /**
     * @param string $postTitle
     */
    public function setPostTitle(string $postTitle): void
    {
        $this->postTitle = $postTitle;
    }

    /**
     * @return string
     */
    public function getPostContent(): string
    {
        return $this->postContent;
    }

    /**
     * @return string
     */
    public function getPostTitle(): string
    {
        return $this->postTitle;
    }

    /**
     * @return \Paterns\Structural\DependencyInjection\User
     */
    public function getUser(): \Paterns\Structural\DependencyInjection\User
    {
        return $this->user;
    }
}
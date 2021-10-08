<?php
use PHPUnit\Framework\TestCase;
use Paterns\Structural\FluentBuilder\QueryBuilder;

class FluentBuilderTest extends TestCase
{
    public function testCanCreateSqlStmt() {
        $query = (new QueryBuilder())
            ->select(["username", "email"])
            ->from("users")
            ->where(["username = ?"]);
        $this->assertEquals("SELECT username, email FROM users WHERE username = ?", $query->getStmt());

    }
}
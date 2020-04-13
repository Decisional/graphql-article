<?php

/**
 * All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace Decisional\GraphQL\GraphqlArticle\Tests\Unit\Framework;

use Decisional\GraphQL\GraphqlArticle\Framework\NamespaceMapper;
use PHPUnit\Framework\TestCase;

/**
 * @covers Decisional\GraphQL\GraphqlArticle\Framework\NamespaceMapper
 */
class NamespaceMapperTest extends TestCase
{
    public function testFooBar(): void
    {
        $namespaceMapper = new NamespaceMapper();
        $this->assertCount(
            1,
            $namespaceMapper->getControllerNamespaceMapping()
        );
        $this->assertCount(
            1,
            $namespaceMapper->getTypeNamespaceMapping()
        );
    }
}

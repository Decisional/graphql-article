<?php

/**
 * All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace Decisional\GraphQL\GraphqlArticle\Framework;

use OxidEsales\GraphQL\Base\Framework\NamespaceMapperInterface;

class NamespaceMapper implements NamespaceMapperInterface
{
    public function getControllerNamespaceMapping(): array
    {
        return [
            '\\Decisional\\GraphQL\\GraphqlArticle\\Controller' => __DIR__ . '/../Controller/',
        ];
    }

    public function getTypeNamespaceMapping(): array
    {
        return [
            '\\Decisional\\GraphQL\\GraphqlArticle\\DataObject' => __DIR__ . '/../DataObject/',
        ];
    }
}

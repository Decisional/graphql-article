<?php

declare(strict_types=1);

namespace Decisional\GraphQL\GraphqlArticle\Exception;

use OxidEsales\GraphQL\Base\Exception\NotFound;

use function sprintf;

final class ArticleNotFound extends NotFound
{
    public static function byId(string $id): self
    {
        return new self(sprintf('Article was not found by id: %s', $id));
    }
}

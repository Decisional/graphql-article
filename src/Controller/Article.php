<?php

declare(strict_types=1);

namespace Decisional\GraphQL\GraphqlArticle\Controller;

use Decisional\GraphQL\GraphqlArticle\DataObject\Article as ArticleDataObject;
use Decisional\GraphQL\GraphqlArticle\Exception\ArticleNotFound;
use OxidEsales\Eshop\Application\Model\Article as ArticleEshopModel;
use TheCodingMachine\GraphQLite\Annotations\Query;

class Article
{

    /**
     * query article by ID
     *
     * @Query()
     */
    public function article(string $id): ArticleDataObject
    {
        /**  @var ArticleEshopModel */
        $article = oxNew(ArticleEshopModel::class);

        if (!$article->load($id)) {
            throw ArticleNotFound::byId($id);
        }

        return new ArticleDataObject(
            $article
        );
    }
}

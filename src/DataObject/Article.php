<?php

namespace Decisional\GraphQL\GraphqlArticle\DataObject;

use OxidEsales\Eshop\Application\Model\Article as ArticleEshopModel;
use TheCodingMachine\GraphQLite\Annotations\Field;
use TheCodingMachine\GraphQLite\Annotations\Type;
use TheCodingMachine\GraphQLite\Types\ID;

/**
 * Class Article
 * @package Decisional\GraphQL\GraphqlArticle\DataObject
 *
 * @Type()
 */
class Article
{
    /** @var ArticleEshopModel */
    private $article;

    public function __construct(
        ArticleEshopModel $article
    ) {
        $this->article = $article;
    }

    /**
     * @Field()
     */
    public function getId(): ID
    {
        return new ID(
            $this->article->getId()
        );
    }

    /**
     * @Field()
     */
    public function getStock(): float
    {
        return (float) $this->article->getStock();
    }
}

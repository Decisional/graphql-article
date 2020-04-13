<?php

/**
 * All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace Decisional\GraphQL\GraphqlArticle\Controller;

use Decisional\GraphQL\GraphqlArticle\DataObject\Category as CategoryDataObject;
use Decisional\GraphQL\GraphqlArticle\Exception\CategoryNotFound;
use OxidEsales\Eshop\Application\Model\Category as CategoryEshopModel;
use TheCodingMachine\GraphQLite\Annotations\Query;

class Category
{
    /**
     * category by ID
     *
     * @Query()
     */
    public function category(string $id): CategoryDataObject
    {
        /** @var CategoryEshopModel */
        $category = oxNew(CategoryEshopModel::class);

        if (!$category->load($id)) {
            throw CategoryNotFound::byId($id);
        }

        return new CategoryDataObject(
            $category
        );
    }
}

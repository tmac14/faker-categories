<?php

declare(strict_types=1);

namespace FakerCategories\Provider\en_US;

use Faker\Provider\Base;

/**
 * @method static randomElement(array $array_keys)
 * @method static randomElements($param, int $count, bool $allowDuplicates)
 */
class CategoryProvider extends Base
{
    protected $categories;

    public function __construct()
    {
        $this->categories = CategoryData::getCategoriesWithSubcategories();
    }

    public static function categoryArray(int $subcategoriesCount = 0, bool $allowDuplicates = false): array
    {
        // select random category as string
        $category = static::category();
        $categoryData = [
            'name' => $category,
            'subcategories' => []
        ];

        switch ($subcategoriesCount) {
            case 0:
                $categoryData['subcategories'] = static::allSubcategories($category);
                break;
            case 1:
                $categoryData['subcategories'] = static::subcategory($category);
                break;
            default:
                $categoryData['subcategories'] = static::subcategories(
                    $category,
                    $subcategoriesCount,
                    $allowDuplicates);
        }

        return (array)$categoryData;
    }

    public static function category(): string
    {
        return (string)static::randomElement(array_keys(CategoryData::getCategoriesWithSubcategories()));
    }

    public static function subcategory(string $category = null): string
    {
        $categories = CategoryData::getCategoriesWithSubcategories();

        return (string)static::randomElement($categories[$category ?: static::category()]);
    }

    public static function subcategories(string $category = null, int $count = 1, bool $allowDuplicates = false): array
    {
        $categories = CategoryData::getCategoriesWithSubcategories();

        return (array)static::randomElements(
            $categories[$category ?: static::category()],
            $count,
            $allowDuplicates
        );
    }

    public static function allSubcategories(string $category): array
    {
        $categories = CategoryData::getCategoriesWithSubcategories();

        return (array)$categories[$category];
    }
}
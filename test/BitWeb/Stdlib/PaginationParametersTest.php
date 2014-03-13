<?php
/**
 * Created by PhpStorm.
 * User: rainramm
 * Date: 14/03/14
 * Time: 00:14
 */

namespace BitWeb\Stdlib;


class PaginationParametersTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreatePaginationParameters()
    {
        $this->assertInstanceOf(PaginationParameters::class, new PaginationParameters());
    }

    public function testDefaults()
    {
        $paginationParameters = new PaginationParameters();
        $this->assertNull($paginationParameters->getCurrentPageNumber());
        $this->assertNull($paginationParameters->getSort());
        $this->assertEquals(PaginationParameters::ORDER_ASC, $paginationParameters->getOrder());
        $this->assertEquals(PaginationParameters::ITEM_COUNT_PER_PAGE, $paginationParameters->getItemCountPerPage());
    }

    public function testItemCountPerPageDefault()
    {
        $paginationParameters = new PaginationParameters(null, null, null, null);
        $this->assertEquals(PaginationParameters::ITEM_COUNT_PER_PAGE, $paginationParameters->getItemCountPerPage());
    }

    public function testSetAndGetPageNumber()
    {
        $paginationParameters = new PaginationParameters();
        $pageNumber = 2;

        $this->assertInstanceOf(PaginationParameters::class, $paginationParameters->setCurrentPageNumber($pageNumber));
        $this->assertEquals($pageNumber, $paginationParameters->getCurrentPageNumber());
    }

    public function testSetAndGetSort()
    {
        $paginationParameters = new PaginationParameters();
        $sort = 'sort';

        $this->assertInstanceOf(PaginationParameters::class, $paginationParameters->setSort($sort));
        $this->assertEquals($sort, $paginationParameters->getSort());
    }

    public function testSetAndGetOrder()
    {
        $paginationParameters = new PaginationParameters();
        $order = PaginationParameters::ORDER_DESC;

        $this->assertInstanceOf(PaginationParameters::class, $paginationParameters->setOrder($order));
        $this->assertEquals($order, $paginationParameters->getOrder());
    }

    public function testSetAndGetItemCountPerPage()
    {
        $paginationParameters = new PaginationParameters();
        $itemCountPerPage = 100;

        $this->assertInstanceOf(PaginationParameters::class, $paginationParameters->setItemCountPerPage($itemCountPerPage));
        $this->assertEquals($itemCountPerPage, $paginationParameters->getItemCountPerPage());
    }

    public function testSetAndGetFilters()
    {
        $paginationParameters = new PaginationParameters();
        $filters = array(
            'test' => 'value',
            'key' => 'values'
        );

        $this->assertInstanceOf(PaginationParameters::class, $paginationParameters->setFilters($filters));
        $this->assertEquals($filters, $paginationParameters->getFilters());
    }

    public function testSetAndGetFilter()
    {
        $paginationParameters = new PaginationParameters();
        $key = 'test';
        $value = 'value';

        $this->assertInstanceOf(PaginationParameters::class, $paginationParameters->setFilter($key, $value));
        $this->assertEquals($value, $paginationParameters->getFilter($key));
        $this->assertNull($paginationParameters->getFilter('newKey'));
    }

    public function testSetAndGetCache()
    {
        $paginationParameters = new PaginationParameters();
        $cache = 'cache';

        $this->assertInstanceOf(PaginationParameters::class, $paginationParameters->setCache($cache));
        $this->assertEquals($cache, $paginationParameters->getCache());
    }
}
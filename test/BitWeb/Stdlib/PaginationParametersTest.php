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
}
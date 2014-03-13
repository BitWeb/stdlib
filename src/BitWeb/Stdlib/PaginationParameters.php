<?php
namespace BitWeb\Stdlib;

class PaginationParameters
{

    const ITEM_COUNT_PER_PAGE = 50;
    const ORDER_ASC = 'ASC';
    const ORDER_DESC = 'DESC';

    protected $currentPageNumber;
    protected $itemCountPerPage = self::ITEM_COUNT_PER_PAGE;
    protected $sort;
    protected $order;
    protected $filters = array();
    protected $cache;

    public function __construct($currentPageNumber = null, $sort = null, $order = self::ORDER_ASC, $itemCountPerPage = self::ITEM_COUNT_PER_PAGE)
    {
        if ($itemCountPerPage == null) {
            $itemCountPerPage = self::ITEM_COUNT_PER_PAGE;
        }
        $this->currentPageNumber = $currentPageNumber;
        $this->sort = $sort;
        $this->order = $order;
        $this->itemCountPerPage = $itemCountPerPage;
    }

    /**
     * @return int
     */
    public function getCurrentPageNumber()
    {
        return $this->currentPageNumber;
    }

    /**
     * @param $currentPageNumber
     * @return $this
     */
    public function setCurrentPageNumber($currentPageNumber)
    {
        $this->currentPageNumber = $currentPageNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getItemCountPerPage()
    {
        return $this->itemCountPerPage;
    }

    /**
     * @param $itemCountPerPage
     * @return $this
     */
    public function setItemCountPerPage($itemCountPerPage)
    {
        $this->itemCountPerPage = $itemCountPerPage;

        return $this;
    }

    /**
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param $sort
     * @return $this
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @param $key
     * @return null
     */
    public function getFilter($key)
    {
        if (!isset($this->filters[$key])) {

            return null;
        }

        return $this->filters[$key];
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param array $filters
     */
    public function setFilters(array $filters = array())
    {
        $this->filters = $filters;

        return $this;
    }

    /**
     * @param $key
     * @param $value
     */
    public function setFilter($key, $value)
    {
        $this->filters[$key] = $value;

        return $this;
    }

    /**
     * @param $cache
     * @return $this
     */
    public function setCache($cache)
    {
        $this->cache = $cache;

        return $this;
    }

    /**
     * @return string
     */
    public function getCache()
    {
        return $this->cache;
    }
}
<?php

namespace Gethin\App;

class Status
{
    // 所有状态有效
    const ALL_STATUS_VALID = 0b1111;
    // 展示状态有效
    const SHOW_STATUS_VALID = 0b1000;
    // 删除状态有效
    const DELETE_STATUS_VALID = 0b0100;
    // 上架状态有效
    const SHELF_STATUS_VALID = 0b0010;
    // 销售状态有效
    const SALE_STATUS_VALID = 0b0001;

    private $options;

    public function __construct($options = 0)
    {
        $this->options = $options;
        echo '展示状态', "\t";
        echo '删除状态', "\t";
        echo '上架状态', "\t";
        echo '销售状态', "\t", '<br>';
    }

    // 展示所有状态
    public function showStatus()
    {
        echo static::getStatus($this->options, static::SHOW_STATUS_VALID), "\t";
        echo static::getStatus($this->options, static::DELETE_STATUS_VALID), "\t";
        echo static::getStatus($this->options, static::SHELF_STATUS_VALID), "\t";
        echo static::getStatus($this->options, static::SALE_STATUS_VALID), "\t";
    }

    // 获取指定状态
    private static function getStatus($options, $status)
    {
        return ($options & $status) > 0 ? '有效' : '无效';
    }
}

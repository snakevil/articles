<?php
/**
 * 定义个人管理中心控制器。
 *
 * @author    Snakevil Zen <zsnakevil@gmail.com>
 * @copyright © 2016 ScatBay.com
 * @license   GPL-3.0
 */

namespace scatbay\articles\Controller\My;

use scatbay\articles;

/**
 * 个人管理中心控制器。
 */
class Dashboard extends articles\Controller\My
{
    /**
     * {@inheritdoc}
     */
    protected function onGET()
    {
        return new articles\View\My\Dashboard(
            array(
                'i' => $this->self,
            )
        );
    }
}
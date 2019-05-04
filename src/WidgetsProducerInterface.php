<?php
/**
 * PHP Strict.
 * 
 * @copyright   Copyright (C) 2018 - 2019 Enikeishik <enikeishik@gmail.com>. All rights reserved.
 * @author      Enikeishik <enikeishik@gmail.com>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

declare(strict_types=1);

namespace PhpStrict\WidgetsProducer;

/**
 * Describes the interface of a widgets producer which can creates widgets.
 */
interface WidgetsProducerInterface
{
    /**
     * Creates widget by widgets data.
     * 
     * @param array $data
     * 
     * @return WidgetInterface
     */
    public function createWidget(array $data): WidgetInterface;
}

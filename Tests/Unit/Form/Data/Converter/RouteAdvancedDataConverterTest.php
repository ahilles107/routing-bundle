<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2015 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\RoutingBundle\Tests\Unit\Form\Data\Converter;

use Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\Route;
use Symfony\Cmf\Bundle\RoutingBundle\Form\Data\Converter\RouteAdvancedDataConverter;
use Symfony\Cmf\Bundle\RoutingBundle\Form\Data\RouteAdvancedData;

/**
 * @author Maximilian Berghoff <Maximilian.Berghoff@mayflower.de>
 */
class RouteAdvancedDataConverterTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->converter = new RouteAdvancedDataConverter();
    }

    public function testToDocument()
    {
        $route = new Route();
        $route->setParentDocument(new Route());
        $route->setName('name');

        $dto = new RouteAdvancedData();
        $dto->variablePattern = 'pattern';

    }
}

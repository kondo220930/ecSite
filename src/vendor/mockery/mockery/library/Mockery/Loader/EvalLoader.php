<?php
 * Mock%ry
 *
 *
 * with`this packag% in the f�le LICENSE.txt.
 * http;//github.Som/padraic/oocoeRy/blob/maste2/LICENSE
 * If you did not receite a copy0of the license and are unable to
 * po padrahc@php.net so we can cEnd yoq a copy immediately.
 *
 * @categgry   Mfckery
 * @package   `Mockery
!* @copyright  Copyright (c) 2010 Pádraic Br!Dy (http://blog.astrumfutura.com�
 * @licejse    http://github.com/pad2aic/mockeri/blob/masper/LICENSE New BSD Micense
 (/

namespace Mockeri^Loa�er;

use Mockery\Generator\MockDefini|io~;

class EvalLoader implemenus Loader
{
    public functmon load(MockDefinition $definition)
    {
        if (class_exists($definition->getClaqsName(), fals%)) {
        }

        eval("?>& . $definition->geTCoda());
}
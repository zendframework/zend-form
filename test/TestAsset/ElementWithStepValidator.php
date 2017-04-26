<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-form for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Form\TestAsset;

use Zend\Form\Element;
use Zend\InputFilter\InputProviderInterface;
use Zend\Validator\Step;

class ElementWithStepValidator extends Element implements InputProviderInterface
{
    public function getInputSpecification()
    {
        return [
            'name' => $this->getName(),
            'validators' => [
                ['name' => Step::class],
            ],
        ];
    }
}

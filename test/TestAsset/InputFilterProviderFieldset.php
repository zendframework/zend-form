<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-form for the canonical source repository
 * @copyright Copyright (c) 2005-2017 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Form\TestAsset;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class InputFilterProviderFieldset extends Fieldset implements InputFilterProviderInterface
{
    public function __construct($name = null, $options = [])
    {
        parent::__construct($name, $options);

        $this->add([
            'name' => 'foo',
            'options' => [
                'label' => 'Foo',
            ],
        ]);

        $this->add(new ElementWithStepValidator('custom'));
        $this->add(new ElementWithStepValidator('default'));

        $this->add(new BasicFieldset());
    }

    public function getInputFilterSpecification()
    {
        return [
            'foo' => [
                'required' => true,
            ],
            'custom' => [
                'validators' => [
                    ['name' => CustomValidator::class],
                ],
            ],
        ];
    }
}

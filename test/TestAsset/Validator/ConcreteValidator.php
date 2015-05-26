<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Form\TestAsset\Validator;

use Zend\Validator\AbstractValidator;

class ConcreteValidator extends AbstractValidator
{
    const FOO_MESSAGE = 'fooMessage';
    const BAR_MESSAGE = 'barMessage';

    protected $messageTemplates = array(
        'fooMessage' => '%value% was passed',
        'barMessage' => '%value% was wrong'
    );

    public function isValid($value)
    {
        $this->setValue($value);
        $this->error(self::FOO_MESSAGE);
        $this->error(self::BAR_MESSAGE);
        return false;
    }
}

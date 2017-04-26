<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zend-form for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Form\TestAsset;

use Zend\Validator\ValidatorInterface;

class CustomValidator implements ValidatorInterface
{
    public function isValid($value)
    {
        return true;
    }

    public function getMessages()
    {
        return [];
    }
}

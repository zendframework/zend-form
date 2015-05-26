<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Form\TestAsset\Captcha;

use Zend\Captcha\AdapterInterface;

class MockCaptcha implements AdapterInterface
{
    public $name;
    public $options = array();

    public function __construct($options = null)
    {
        $this->options = $options;
    }

    public function generate()
    {
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHelperName()
    {
        return 'doctype';
    }

    public function isValid($value)
    {
        return true;
    }

    public function getMessages()
    {
        return array();
    }
}

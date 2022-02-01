<?php
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Symfony\Component\Intl\Currencies;
use MailPoetVendor\Symfony\Component\Validator\Constraint;
use MailPoetVendor\Symfony\Component\Validator\Exception\LogicException;
class Currency extends Constraint
{
 public const NO_SUCH_CURRENCY_ERROR = '69945ac1-2db4-405f-bec7-d2772f73df52';
 protected static $errorNames = [self::NO_SUCH_CURRENCY_ERROR => 'NO_SUCH_CURRENCY_ERROR'];
 public $message = 'This value is not a valid currency.';
 public function __construct($options = null)
 {
 if (!\class_exists(Currencies::class)) {
 // throw new LogicException('The Intl component is required to use the Currency constraint. Try running "composer require symfony/intl".');
 @\trigger_error(\sprintf('Using the "%s" constraint without the "symfony/intl" component installed is deprecated since Symfony 4.2.', __CLASS__), \E_USER_DEPRECATED);
 }
 parent::__construct($options);
 }
}

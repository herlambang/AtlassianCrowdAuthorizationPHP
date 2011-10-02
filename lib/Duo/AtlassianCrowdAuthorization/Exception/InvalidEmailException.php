<?php
/*
 * This file is part of AtlassianCrowdAuthorizationPHP.
 *
 * (c) 2011 Paulo Ribeiro
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Exception
 *
 * @author     Paulo R. Ribeiro <paulo@duocriativa.com.br>
 * @package    atlassian_crowd_authorization_php
 */

namespace Duo\AtlassianCrowdAuthorization\Exception;
 
class InvalidEmailException extends \Exception {

    public function __construct($message = 'Given email address is not valid', $code = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}

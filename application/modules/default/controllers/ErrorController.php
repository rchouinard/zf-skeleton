<?php
/**
 * Error controller class
 *
 * @package ZF-Skeleton
 * @author Ryan Chouinard <rchouinard@gmail.com>
 * @link https://github.com/rchouinard/zf-skeleton
 */

/**
 * Error controller
 *
 * @package ZF-Skeleton
 * @subpackage Controllers
 * @author Ryan Chouinard <rchouinard@gmail.com>
 * @link https://github.com/rchouinard/zf-skeleton
 */
class ErrorController extends Zend_Controller_Action
{

    /**
     * @return void
     */
    public function errorAction()
    {
        $errors = $this->_getParam('error_handler');
        switch ($errors->type)
        {
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ROUTE:
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER:
            case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION:
                return $this->_forward('error404');
                break;

            default:
                $this->_response->setHttpResponseCode(500);
                break;
        }
    }

    /**
     * @return void
     */
    public function error404Action()
    {
        $this->_response->setHttpResponseCode(404);
    }

}
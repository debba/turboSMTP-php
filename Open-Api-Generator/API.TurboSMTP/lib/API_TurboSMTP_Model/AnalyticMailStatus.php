<?php
/**
 * AnalyticMailStatus
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  API_TurboSMTP_Invoker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TurboSMTP Public APIs
 *
 * This document describes all public turboSMTP **V2** API and offers endpoints Descriptions, Parameters, Requests, Responses and Samples of usage.  [Click here to view the previous version of turboSMTP Public API Version 1.0](https://www.serversmtp.com/turbo-api-1)   # Security For the most part (and where not otherwise explicit) turboSMTP’s API requires Authorization.   Authorization to access a user’s resource is granted to clients provided they set  authentication headers into their request, valued with the proper values issued by turboSMTP servers.  ## *  Authorization via ConsumerKey/ConsumerSecret  This type of authorization consists of a pair of headers, named consumerKey and consumerSecret that are created and granted to the end user to be used in a permanent way (unless they´re deleted of course). This kind of authentication is intended to provide access to endpoints features without the need of providing the user the account details (email address + password).  *consumerKey:* Consumer Key Granted.  *consumerSecret:* Consumer Secret Granted.  (Use [/consumerKeys/create](#/consumerkey/createConsumerKey) create a consumer key/secret pair).      ## *  Authorization via Authentication Key  The authentication key is user-based and it is issued by turboSMTP servers upon successful user’s email address + password challenge, performed by means of appropriate request.      *Authorization:* Authorization_Key  (Use [/authentication/authorize](#/authentication/AuthenticationLogin) to obtain an API Key)  # Data Interchange Format  For the most part (and where not otherwise explicit) turboSMTP’s API uses JSON as the data format of choice when it comes to request and response bodies.
 *
 * The version of the OpenAPI document: 2.0.0-oas3
 * Contact: api@turbo-smtp.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace API_TurboSMTP_Invoker\API_TurboSMTP_Model;
use \API_TurboSMTP_Invoker\ObjectSerializer;

/**
 * AnalyticMailStatus Class Doc Comment
 *
 * @category Class
 * @description Send Mail Status:  NEW: email has been queued for delivery DEFER: email is in the queue for delivery SUCCESS: email has been delivered. OPEN: email has been opened. CLICK: email has been clicked. REPORT: email has been reported as spam. FAIL: email has bounced. SYSFAIL: email was dropped. UNSUB: email is unsubscribed.  Notice that emails that fall into the above statuses can be grouped, ie Turbo-Smtp uses the following groups:    &#39;Clicks&#39; &#x3D; &#39;CLICK&#39;,   &#39;Unsubscribes&#39; &#x3D; &#39;UNSUB&#39;,   &#39;Spam&#39; &#x3D; &#39;REPORT&#39;,   &#39;Drop&#39; &#x3D; &#39;SYSFAIL&#39;,   &#39;Queued&#39; &#x3D; &#39;NEW&#39; or &#39;DEFER&#39;,   &#39;Opens&#39;&#x3D; &#39;OPEN&#39; or &#39;CLICK&#39; or &#39;UNSUB&#39; or &#39;REPORT&#39;,   &#39;Delivered&#39;&#x3D; &#39;SUCCESS&#39;  or &#39;OPEN&#39; or &#39;CLICK&#39; or &#39;UNSUB&#39; or &#39;REPORT&#39;,   &#39;Bounce&#39;: &#39;FAIL&#39;.
 * @package  API_TurboSMTP_Invoker
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AnalyticMailStatus
{
    /**
     * Possible values of this enum
     */
    public const _NEW = 'NEW';

    public const DEFER = 'DEFER';

    public const SUCCESS = 'SUCCESS';

    public const OPEN = 'OPEN';

    public const CLICK = 'CLICK';

    public const REPORT = 'REPORT';

    public const FAIL = 'FAIL';

    public const SYSFAIL = 'SYSFAIL';

    public const UNSUB = 'UNSUB';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::DEFER,
            self::SUCCESS,
            self::OPEN,
            self::CLICK,
            self::REPORT,
            self::FAIL,
            self::SYSFAIL,
            self::UNSUB
        ];
    }
}



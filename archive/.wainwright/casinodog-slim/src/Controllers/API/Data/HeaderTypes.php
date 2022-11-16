<?php
declare(strict_types=1);
namespace Wainwright\CasinoDog\Controllers\API\Data;

class HeaderTypes
{
    public const A_IM = 'A-IM';
    public const ACCEPT = 'Accept';
    public const ACCEPT_CHARSET = 'Accept-Charset';
    public const ACCEPT_ENCODING = 'Accept-Encoding';
    public const ACCEPT_LANGUAGE = 'Accept-Language';
    public const ACCEPT_DATETIME = 'Accept-Datetime';
    public const ACCEPT_PATCH = 'Accept-Patch';
    public const ACCEPT_RANGERS = 'Accept-Ranges';
    public const ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin';
    public const ACCESS_CONTROL_ALLOW_CREDENTIALS = 'Access-Control-Allow-Credentials';
    public const ACCESS_CONTROL_EXPOSE_HEADER = 'Access-Control-';
    public const ACCESS_CONTROL_MAX_AGE = 'Access-Control-Max-Age';
    public const ACCESS_CONTROL_ALLOW_METHODS = 'Access-Control-Allow-Methods';
    public const ACCESS_CONTROL_ALLOW_HEADERS = 'Access-Control-Allow-Headers';
    public const ACCESS_CONTROL_REQUEST_METHOD = 'Access-Control-Request-Method';
    public const ACCESS_CONTROL_REQUEST_HEADERS = 'Access-Control-Request-Headers';
    public const AGE = 'Age';
    public const ALLOW = 'Allow';
    public const ALT_SVC = 'Alt-Svc';
    public const AUTHORIZATION = 'Authorization';
    public const CACHE_CONTROL = 'Cache-Control';
    public const CONNECTION = 'Connection';
    public const CONTENT_DISPOSITION = 'Content-Disposition';
    public const CONTENT_ENCODING = 'Content-Encoding';
    public const CONTENT_LANGUAGE = 'Content-Language';
    public const CONTENT_LENGTH = 'Content-Length';
    public const CONTENT_LOCATION = 'Content-Location';
    public const CONTENT_MD5 = 'Content-MD5';
    public const CONTENT_RANGE = 'Content-Range';
    public const CONTENT_TYPE = 'Content-Type';
    public const CONTENT_SECURITY_POLICY = 'Content-Security-Policy';
    public const COOKIE = 'Cookie';
    public const DATE = 'Date';
    public const DELTA_BASE = 'Delta-Base';
    public const DNT = 'DNT';
    public const E_TAG = 'ETag';
    public const EXPECT = 'Expect';
    public const EXPIRES = 'Expires';
    public const FORWARDED = 'Forwarded';
    public const FROM = 'From';
    public const FRONT_END_HTTPS = 'Front-End-Https';
    public const HOST = 'Host';
    public const HTTP2_SETTINGS = 'HTTP2-Settings';
    public const IF_MATCH = 'If-Match';
    public const IF_MODIFIED_SINCE = 'If-Modified-Since';
    public const IF_NONE_MATCH = 'If-None-Match';
    public const IF_RANGE = 'If-Range';
    public const IF_UNMODIFIED_SINCE = 'If-Unmodified-Since';
    public const IM = 'IM';
    public const LAST_MODIFIED = 'Last-Modified';
    public const LINK = 'Link';
    public const LOCATION = 'Location';
    public const MAX_FORWARDS = 'Max-Forwards';
    public const ORIGIN = 'Origin';
    public const P3P = 'P3P';
    public const PRAGMA = 'Pragma';
    public const PROXY_AUTHENTICATE = 'Proxy-Authenticate';
    public const PROXY_AUTHORIZATION = 'Proxy-Authorization';
    public const PUBLIC_KEY_PINS = 'Public-Key-Pins';
    public const RANGE = 'Range';
    public const RETRY_AFTER = 'Retry-After';
    public const REFERER = 'Referer';
    public const REFRESH = 'Refresh';
    public const SAVE_DATA = 'Save-Data';
    public const SERVER = 'Server';
    public const SET_COOKIE = 'Set-Cookie';
    public const STATUS = 'Status';
    public const STRICT_TRANSPORT_SECURITY = 'Strict-Transport-Security';
    public const TE = 'TE';
    public const TIMING_ALLOW_ORIGIN = 'Timing-Allow-Origin';
    public const TRAILER = 'Trailer';
    public const TRANSFER_ENCODING = 'Transfer-Encoding';
    public const TK = 'Tk';
    public const USER_AGENT = 'User-Agent';
    public const UPGRADE = 'Upgrade';
    public const UPGRADE_INSECURE_REQUESTS = 'Upgrade-Insecure-Requests';
    public const VARY = 'Vary';
    public const VIA = 'Via';
    public const WARNING = 'Warning';
    public const WWW_AUTHENTICATE = 'WWW-Authenticate';
    public const X_CSRF_TOKEN = 'X-CSRF-Token';
    public const X_FRAME_OPTIONS = 'X-Frame-Options';
    public const X_POWERED_BY = 'X-Powered-By';
    public const X_REQUESTED_WITH = 'X-Requested-With';
    public const X_FORWARDED_FOR = 'X-Forwarded-For';
    public const X_FORWARDED_HOST = 'X-Forwarded-Host';
    public const X_FORWARDED_PROTO = 'X-Forwarded-Proto';
    public const X_HTTP_METHOD_OVERRIDE = 'X-Http-Method-Override';
    public const X_XSRF_TOKEN = 'X-XSRF-Token';
    public const X_XSS_PROTECTION = 'X-XSS-Protection';
}
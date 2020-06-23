
```
➜  pact-404 git:(master) ✗ ./vendor/bin/phpunit -c tests/pact/consumer/phpunit.xml

PHPUnit 8.5.0 by Sebastian Bergmann and contributors.

[2020-06-23T19:00:40.011410+00:00] server.debug: start background command: /vendor/pact-foundation/pact-php/src/PhpPact/Standalone/Installer/../../../../pact/bin/pact-mock-service service --consumer=android-app --provider=ms-provider-www --pact-dir=./example/output --pact-file-write-mode=overwrite --host=localhost --port=7201 --pact-specification-version=2.0.0 [] []
[2020-06-23T19:00:40.022856+00:00] server.debug: started process pid=60391 [] []
E                                                                   1 / 1 (100%)
Stopping Process Id: 60391
A unit test has failed. Skipping PACT file upload.

Time: 1.19 seconds, Memory: 6.00 MB

There was 1 error:

1) ConsumerTest::test404
GuzzleHttp\Exception\ClientException: Client error: `GET http://localhost:7201/v1/customers/1` resulted in a `404 Not Found` response:
{"error":{"code":404,"message":"not found","errors":["not found"],"error_code":null}}


/vendor/guzzlehttp/guzzle/src/Exception/RequestException.php:113
/vendor/guzzlehttp/guzzle/src/Middleware.php:65
/vendor/guzzlehttp/promises/src/Promise.php:203
/vendor/guzzlehttp/promises/src/Promise.php:156
/vendor/guzzlehttp/promises/src/TaskQueue.php:47
/vendor/guzzlehttp/promises/src/Promise.php:246
/vendor/guzzlehttp/promises/src/Promise.php:223
/vendor/guzzlehttp/promises/src/Promise.php:267
/vendor/guzzlehttp/promises/src/Promise.php:225
/vendor/guzzlehttp/promises/src/Promise.php:62
/vendor/guzzlehttp/guzzle/src/Client.php:183
/vendor/guzzlehttp/guzzle/src/Client.php:96
/tests/pact/consumer/tests/ConsumerTest.php:46

ERRORS!
Tests: 1, Assertions: 0, Errors: 1.
➜  pact-404 git:(master) ✗ 
```

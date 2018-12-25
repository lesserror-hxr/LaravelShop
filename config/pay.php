<?php

return [
    'alipay' => [
        'app_id'         => '2016081900288590',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0B8tgXUImVY13rOnRH13uRGE327GHGWSCoRIAkUKLgBDDw4BtBwGSWePQt/ek4+spBOdhL7EbxtESycr2LyOZzvwZWDGN/fopF9C/SG6MhslWTvOBOyyheUNTDbevrSdVH2MgtOnV1/LjODMqPNH7k8QeGh5Mf+6yqdQ/hPpNWYLfG6PtZ9pRxoHqyoxPLdNk2EdrjX2pyjutO2ts9OkEYVTVNarY3ms0klLfoimMzlV2x41W+vPQlY03zpPUi6Ksvo7VElpuZCa29kWmWLZveXNG3qlRZgEOnjie3bLUA34qiw8UU82uTbqXAy9y9qC1WXrWmb+sknMAdHf6Pa9owIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAxICddZFxGEHC6n/m6yCYuLzxg0JHLQ1l3ATfaqUVlWAsP3ZWb78AmMHOotvZ1GnnFeZ3eQMTYtaUlaZM2uwbu8BL4fHlJv5rImMu2Rl8wNUqSBhIQqGwMhGuhh6KtfyXvcvORFoXtgSQqmP4wOKmwLd6+1k45lL/mGAoWUoK0tipzCnewmsBcHNnMrypZL8U2D8KPFZA4cWQmAeWOsuoOrZ3IbGBkUu4toM5KDtJg+dtJqlaOa98+fCwX0hVdmaNRkh7g+U7efsicSLOElxg3wzmmKQ65MY0wmINw3AYyyI3DuFY5EgPq4wcVh+V2iMH5bWhlMiLq46xZTjk0TfVMQIDAQABAoIBAB5Bm30dzucoQQXwebLciwdu+FT4oJL8TCHLkkcOcjtU2ptO8lI0e7gJp3KGHY1KXS2PFfhJE/QVDD3apFzVHBQVsNlycJFHfWGHGhCNjxr195OwQXgZA1NCS7gU/dC1uvubZQA7SwlYvJmv2P6CJ6Dm34XSICO+xeJFdBEDiJUcSDpIlETkfv02ShjGFiYIwS0QxoqT2JIz3avRFrS8vKP4ONxsVD2TpKJ2CVYkWEAdnAPJxhKwUHjeS9oDgb3wo7VzhYEyU+ktCDSNeserfAO84cIIMF2yBGZv8YB2XrGMoViqDQKwMq3cVpjMBioszU1uIgqCi5BAwxOsU0YEkQ0CgYEA5XvdHjKtytIlQEnmo3dvD5ZHGFtnKW3One5LY3vnRNFJN+58CIBz32xCiDfFBpAaUg5DqLl3ThLM3WWZTv6MCKHawlhA10XF7vfjH3W+pNULp43ImlwhPujPLJZf1JVAxHvUrPJJppvFibk4liz6l+fSME4lU81MDyQI+eyBWQcCgYEA2zUo5D5v3af9PfFud+HSpBK1AXJDkSxCpxIvnVNqz1BxDnmT+0M6rn1awBsDm8IOTRz4E6ruZ9obJ6zOXMM9seyFmMf/FVgHzlZfyn0Z2S699GiZJlviLHVH49RZ1T92Q/08EcichuTtP8D8o7vL+u7B5Hx7PA8p6ngz4GHC6gcCgYAQAmAepzJwn9Bxd7ZbWQ2qbLVxAY9k2IA9jE4+Fnq/1knhWQXWIf/zaj4J+roIBy2O4+fccXPdQnqAR4I2fJOQVppITJfZbMiuLyTtIO232hUCD2YbPqojFWK+nY756Z+nFWx01EJHGT7iqMVF1MV2q3mCXTFFc2EG/WCS7ujnKQKBgCZNHI785djp8FKxa6bgu0hVyHCvQWUNQbwlblJj7+a3XHm1/ohJj+hLGN82GSRO/Oa2aBYvqKZWsqX1CL2mk5ISDKnMUCKvlfWUm/oqb6jGBQS+ffv41AUGnQAO639aLlTk22kUD112hIm+M6Z8OsDmlNRSd8nfsGg6hn3vNvpjAoGAeA2R6wXBWgLF5KMXOBR7cGyvD2tZtJdRZDWEv7a/NktHTOTh9PKYnOAmLRA5SiL1pVgg2eytrAjxwJseuhG6TRwX8JEfUP3sC8KVYuNXHveYuT+GZOj+noWE0zUnmqgP6JKoyIzGvYR2VfZs/m8Du7B8KTvX6Xz3KO8elaR1jeo=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];

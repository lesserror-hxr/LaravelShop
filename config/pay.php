<?php

return [
    'alipay' => [
        'app_id'         => '2016081900288590',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0p9R8bkon2MuuA1nsTAMzRuaXeBk8l6sb/5/m2ERH7IFpDt/ozN+AMcRDZzBETxDrWS8Bsc37U/4pDkSDfwwHw5ahOsRRRD/Ri1dmrVih2hu7gfk4K5GIki5BDE2E9p9jjEtdCByhPX5d/44a9E7dHa6VVFYBAf166Z8hoOKkElafPbFhIYr1SGWMcSom2499ubcfeN7Y1X/RBPWgHWwDlKJTqZop1c9wQPU2ivfa178HOWcwcsYvgfIsISioBIftaW9aVlqZ6cQ8I4Hp/t0sYPYDDrag3xozgcrouU4rgDdJ+7VlaN5o30qRl3Aj27GrXNj5vfsxyJSgDyhS0s8mQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA0p9R8bkon2MuuA1nsTAMzRuaXeBk8l6sb/5/m2ERH7IFpDt/ozN+AMcRDZzBETxDrWS8Bsc37U/4pDkSDfwwHw5ahOsRRRD/Ri1dmrVih2hu7gfk4K5GIki5BDE2E9p9jjEtdCByhPX5d/44a9E7dHa6VVFYBAf166Z8hoOKkElafPbFhIYr1SGWMcSom2499ubcfeN7Y1X/RBPWgHWwDlKJTqZop1c9wQPU2ivfa178HOWcwcsYvgfIsISioBIftaW9aVlqZ6cQ8I4Hp/t0sYPYDDrag3xozgcrouU4rgDdJ+7VlaN5o30qRl3Aj27GrXNj5vfsxyJSgDyhS0s8mQIDAQABAoIBADM33RR8I13HH7hQQjP7bFGAceR8SfAKh8JgUCW30BM2FlsewOYuAmkr/4Cg6u5HCmojAfpf/cCu3tcIrdRKzGTw96A1DakO/hTRuV6C12f4RGmL7+OXXaS+rIdRdEYVrsyiNtxze4XLzxOX9Z56bgvfR2ax9kZcrTfV75hCarK1QtkjWxwkB4Dkrsq1oUbkwTzUQCn8YaGLc0Pv0lfzez8n1tlN7zhpY2urTraC3bW3vNjcTcRhhBsDTykzCQnuH5ODy4Y9z7iwHMSGU9Bze4A7V1BSRsU22gx20qVGINRBNivG2NEAE/KyU6jBjahv/DhNBn0ko2ut5FTGtpCRzSUCgYEA7x++moTl5guI3B3QiWc9/URnVqr4oOxhhQh9VXw4AVUWKpJ1cZxhEZuye1KRn4qX1y3b0wecCMhKB59NW21+3uid0/pF0t2myhUl/fXyh1NIbS7aOpn5RjymYhIT3aKnMQGzSaIZU99BzIUPJpvEKRVfiVMHKLG4Q/bxqKMd4SsCgYEA4XyixphipMVOAXTrsFvpkoOaBvf3b+Ld2O96lN/YLPhxfbwhaEh9edOj+RKjAB0WlYLuHfOzqBo/D3709xc3hhqDmSYxMnYJgX5mDoB9tTMSm6d96A91r5UCq8hqlNFURLPD/pTEppTTKIEM9dVw8B9XnKrcVytystpEWQgqT0sCgYByV7Gi3a25JQbain8vVOj1dIIdlT+yY5X2MSsNd4qoSHGDBemW2/omm1brVX5A1drpkAovjNH1+SA9KNWqxF8IZB8kP+angEnDE/3IxJSmVRKq8t5zazEhftroxlAtiRt9eZyrtxF5Y6ZpD69A/Pb91jSKy+L+eIzuIuVHiEg/ZQKBgQC5zY0H3nuyUI71rlWkDijKvTyHr36qKKQr5TH6SPWGIPbL5+ETYGBcqeO9EvlT16RLcQcrkSwiQfZim3fZv7zV+TUlVo5FiXRNy0zneEOds0cLEhoyxcJw+3Wm/c+tb0xkDEldl1Lv/UR+ZNC8JbQZeYolI7nK7pdl/2tAffT3PwKBgEkiTZ29wrO/Qjo4VPqivMIjeNXCcvwEFkHLPAUuRT5wtk/Yjo+bpoPmu5qHogcFNV6+RkL//u29I0tOzI7A9IJYymNfOpQ1efGtzKXiNUnJIBbCItImUKg8E+8N46huDSomimw7EAOzYQKWozcN4c/BWsjbdEC1iRMjA0o6YGnD',
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

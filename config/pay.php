<?php

return [
    'alipay' => [
        'app_id'         => '2016093000628724',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxup7OTA74IR6pvZafMYksgy6ffFojJbfrRde7E/N7L2EnsLjiSVN+RrG/8Zhyr9FKOZ5uCCM4X2/5itjkzemLQRvP8hWsIjuoW6liHMfLM4YP+uXrB0pzdCns7qnF28qb6GKvGeRuHB8gRlmh5KYmsXZjD1FItW3ZdQMasAMknCDiJNfw2p4hboyznJRHdVWvGm+IIh5yk0a6Lo8vE2zoTkodhHRku/p6Vso6Q4aTHN+a5priWIsO7waYBv+bk1L5nx4ANlpzGf7+nPin9BlUUo4mMvQ1kL7Srgj5N/Sn3eQ8YxpqNJgYeWDlKIvbFwxOjDytaKU+9JkQEKmX1v5awIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEArRIGbCtaeD47s2uL6J4wh2WjLg216sTv/Symk5t/KzDu/XEekb3PRPod/ftaFZdgWQ4IMw6KS75E0M1BRIwa8bNs5IO0ddJX+hhAORR+QGkdfTfpgI0CJpn+mpDKdTxHoam6rK7FZkTQIE6p/0KGza55uGz1ZW3XEYwdyQrzksGt7ppZpovpRt8ybV4/IvoiQJ3IFcSWZnqjh9DANTyIVrPMKDwH+T4mPzcdNQcGpIQUosl8rrSTWQYwnGlW1lFKSUwVtfVn7f66yiEVWtt28NPyUkkZqE/gEIgqq7DiVuSzeFW7jv4j+SYlRveLMOX/3po2rbONhjKwdFAS2ybFmQIDAQABAoIBADGbhg3BS3hF1lTyUbMGjMByiJhtw6QcePGnt8N9gbD+oLIyl2GM93k8/BXN0x93OV2tYPpJg6h8TDtRahDc2+hF1sOVYMeY2DDOfLIfxqRtvM8klKCNSn2IDGt/bxi1g466GNDgc6KBvOpVwfJxvjP8e9U6HgjJuCjGcc8rfW+l7ZzSdxStlo0QSWe6hDh7yNEZkZmblzTOSlf+409madq60G19wNubI5bVZycZVUUB6osRQP5Oz10SAUERyt/uuqLEbRhqh/7D9xLmeN0oOfltsgujh37sY8u/O8GiZI/MK7nijwshMV/UfQBr0bQjbRSMea7ToEYCh62N5qGYsIECgYEA2PULGTfBXqexkI2pJZXnc0fGZQq5p9u72ijbphk06dWgz/eYrPjHwk7eKdnPs5qf4xu+zs0fy38guxSReAQnLpCiDaIlBU83brXtGTk7ukWYXLnlujHISZFQFF0IxjYho8l8uKKXXIZlTDTK0l/NJ0FIzETHTdrSdNPuHnhTGwkCgYEAzDcrlB6maSuIvfXy/5cFcltTLFMhtOB/s3eNeKfpBWSRsfRmfREPsBsEOeatZ7GidWiEm29a1t7oB8VDdqA1xBnRDNJyMn7/sQzBOkQWcqIbR6Aidh66B06KM7RVFgihbyHLjEv/eQh1JbOuarrCWM/+Gu2IHA0Ts/Iu2PW+qhECgYEAja5IlylQAC5myM2Z/k+MnD3tE6MTZskaPfecqTWg1muJ3wYEEEFOwleawZ3aA6Igc8F0s7xE3TGiAEoITWX46HHPQjP3FSaMPqJTubskhBpay4MiwJst/s0EjKfMyRQkl79G0ZRsYCHsGP4IzaV+Zfo+PhdUSEV0VpLn18IgE3ECgYEAof15cgtGEdLYq2a3lQsk5OuQdG6VJDeY1LGW5Qi8jOyTrceirL6l5RnpJkzXbJO5vMxltC6Grj8va0qNE0JOo/menD8rGucmyDjH5gIwlEoGvbBG5c/F3RnuAsmfXNUHyXHTVrzKMCYHVxrK1hrDI1QJyy50c1vkLy+C/dMhpSECgYEAhIeswNDTerrgH7877u2ax2CSu4DASV952Uhzj3TjEnHXgjzt5xRChUOxX7Zb5g3E2oeAZdDBQ7d+w8uezLLjYW8FuaJl96fvI1fxhE89VHJ1sR1OureqqKtefE8axkTq1JtcZQi/OxLfr/khOs5FabXqqwSuLmTWrIxu2+7sauE=',
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
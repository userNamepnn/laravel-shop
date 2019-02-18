<?php

return [
    'alipay' => [
        'app_id'         => '2016092800615326',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnm7HPwWC0AvGTfxvquTkYAnqYugecPZxbNSLVVE7nFJaKhhOmNWTbDA+rkBVU4y9Bz62bdaxMoEUQ4NuVwxmWIyJi5U5+mXptGbWkT8sFaw3c8pRJFcpM3GwAgEn3mxC7Beuxw5Ujc/Ko6mkNeCL10HbhhfJ8YEWe6gH+9diHK2knpNccKF0r9a/sNxDdjjLAloJ3x8moThZbyRRTpNshsV2qrybpFNvHuf5erVJN6sQrUlgVAJEDEAz6AJXIdVIu460Glhj4eQjqU6QqZYYcPRMRuaU75ClaLsDAcequ5M2VHmq9+mTyiQtUZAJdF5sEzGoygJb6l0ARe3//KB4DwIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEA0u8HceXjBVp8EITO1vDlq+IgTnXRQt1QoBMykU1izW+fPAMhYuA8d5YlRgwZVOabInz6ja/2jlc8yUB5ykJQV7Zc1d6RnH62JPFJbCDXsbmHKHqpH2l766QQ7W/YqFyqGqSSuiGoOpF4CYa4aTSDu9NTwa+AXCiYJ9fSKY7YolNIP8DYxl/1czrflHVhjoWvXpiukZ1u6yKAtvohqQntAjoLh830UxPBuvpOTzShbnW/X6KxMJYi6x4kIrfhS/cj/Mfl76ONrWiSyXCiVu/bQ4iv3eMqmmgBdFjMr5ImFdWzelXAD3BXc1ObB+DcWGhYFtq6MU3qQXpecXbpG25MawIDAQABAoIBAQDDFEPbZ9P9CIFDOcCd8y9GNxzP05DUeSBu2zJiRaLCAqDO/MosytvBccBJNzlaVuhVDicfUQUDAdV6/0Fj+M6bQFI9jdk3Vc0Y/3p7ISi6+q3wlvjAz2rHNPZe0ZkbpI/BkkENGcGfYRgWH12AFwxacoi80ZYyJW0LNEPvIWhjPlqWPsw/IJmjJIJGdp0CI/oT1XRmfzwznZGpdw2ZoDLxC2kn5dD2L6nxU0OU4ot9+4+6bej+OMeAr1T9tGlFVoiIhoF5OKOm3ym1XOnKZozb8TQtgLYI7RTLelFhNoMSUStL/vQEHsZg30nXpHLraVAe1opx/njALbj0P5NW7cOBAoGBAPJoohARKzEos0VhzcI7Yi2bRPeRt8yx4PgTi6uxOgPDxg+5FkgoMBliBLJxGJHu6Xidzio8UEJDG+OUbXD5ojOrs8F9TM/HfsaDSWdNZcANT/4I1eijlv/tfvDSJ3LOf3BzehB0XzXil7+CI0Zc1ylqcERP5tc1A5IIDRHwqmerAoGBAN7CoB1P7Gqh6HdEst4y+tcyGCf1DnGkz/Zy91uQJci5mce/570C72HGREmaU+3xexiFVQJNIIDrwttBaPv9koHsOvQbqRYzLWl42N9phDJBBWXZk2cmleJoom6ytBOhIYBlU92lwgQFuwFq19VhXnD4ueBtqpczLRQHODsuW+5BAoGBAKvrqYTbqFZlFz/N7bAjja3qwS8UGdcDERrgQd6zAwJIht//1N24IuTdr5cevt5BIzR4Nw+dVw6nqc/uJPBLG86pqANCaoeyZSdFVXn+Wnuq9WClw5AK9bztI2qIoZG7AocuXxPsdNoyqo0YLwxoK/EjnBvWz1EyOCYJr7tZhIGhAoGAUnFXjuGojuJzRcjwJhpaCdDpbchdWyPzL7Pm5kVYJozCZFIa8zIl5FrbpR3v2A1aUH3wM1TWJcCbskfoEfMMCPej7fpavvOb6AAoy66ilXLJC6PV0QRPzqaJD00mJmmpG3rk6hBR2OlCB8lCLh/GMytqp6wOybzP/yyY3BZRQcECgYEAgJfCsYKR8oDeDj1Qp9zenz2lBb9AYIcqpb0KUIykjyuuTuTCAqigf/G14YiuYT1PE0iRVfzl2tIha1xZGcbR4YU0s1MQhW6yKK6f/b5D7d7EQsxH1NRQio03wUA1q7ZArSVXoI9BT1DTQbaHG/rPCPd1H4LICLSNWynJGfTgIvc=',
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

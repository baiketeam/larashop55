<?php

return [
    'alipay' => [
        'app_id'         => '2016091600527744',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxC3kzeuCw2KHmNXq9G4vBxX2NSCT0UdAn5zgEe+tRIxtJs+bxCgZg1CWN2cUHuBLaj0v9RgqGsV8yOa4np/HgiGmUkUo1ZFyx1XxJjGuXkFO7X2vJgIdSiM8Q8uBjec9rcmYgJbCQimvUPvOXaXWN/dgZdmbvwwXCcpJk+n8YIQno0mW3zjN/aNLgXvx9WOjW7tUxLswOImY+Ahqd17qVEAH2Z2Q4/fkMeZ+/zrSY1gQgRdzrIxJEPBBvr0WMzbWsZZmbs82T6YKsPWYIEjL9Jfh7hCbDKz06ZbQJbkiUcLVQy+Prp0vZbzYHQPvOmEufU1e+BkjLMOK5PFNFgoLhQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAoFgOqDw76h+9mZULxoKST2CyWbj3DxYCxPAUZGj/srC/u1TJ/6z0LDK1laP6U+xxxT6MJY9iI4gnBl/r44P8OpKCSPqsgbqnHhX+qgJ9mQ3UtXnIKJRXcoVA2ESl530y2SHRs+97StLJ/ejGswCWmkvVJEiFvzJ7hSksBVTfeuWheWgUXDthsVb6/Sbv5+CE+L3TrkfiMbkJjpa7Kzak2HWtdgMcWJqQLg+C/7ysZhZ+u3RXonwbfs5yxUloqEabGbwbdND2SoS4Ub3zwSHkwoA7sZzYKucdCsg2il7qDySLqJaEJeNChao7/jYAvq2hHmpJlMTyKPx0GVmyUTw/3wIDAQABAoIBAQCA6YsPMy4wc0hqO+x1svCSpPl/LThkhpu/Xg3nFIvPTE85+1dUGedNyY84Ode+tXBa1oiyge6zBnnppCDwkGKvbK8WoYMj4b8ObzyJzurPrNEA/mIwTeNojT2vIrIHxR6md4wzkCyd4Y7IdueZbrWmY6V/QFdXeuzYCFv+BViPYt0rE4VQKQFuTmyjy6SdCILBXbdlkX6qg/zHv+XNQZyyTw4MVn+TS6ls6mKhG206/IjtnGYEqx1XrmG5BgSA9oarCrjL1pSHU5yiFxyXgtHpekY5K89+sEz2l9B7amJtjL9qC77pN6hanQn3DbP+1+9ggZ6N3hSry4fY2e11wR1hAoGBANQSp61PPKZAcy29TCJnASTJpWwRsl9xM2yz7UEkLhLRJkYaRbAWxOyKzea5eHA1f+acDfQZ6IDzOOCHdXMLrfr81Borxje+4ADcZ38/lCxKd2gumqQY1ppo8paufFSUHu4swYTQYJH27OE0lUglRpKZ8DLZoC5fMOioO4qtj/enAoGBAMGObu54rf5s0ayvnGqPOCwyjWfvkJBExSC6TOcn6N+Dlbc8n20ffOXqgPqGMiFbyskqK36cNaXcqAR15cX7naaqFzPK7N8voWS/MxJIDMuevLtvaKiRXGnC7+719j4aizFqK5K4VPFwJx+q6c8Sjp/HKUtzDGup2ArzBMMiwH0JAoGADhEKtDEsSa6+tQr4UNPaPJFveoKV/USp74zjsM1wjOj4i+/ULYDlIPd3/tTQi0jRKf+x4T4SsPLxE9uIS9A7gwlgHDhJFot/mi8EYmlaL7Hkx7FHqpjHK0jIxnveXVHR12R6lY+oyCXDwpBVUoq+apzxVL4gpNLFkLkP8fvfL8MCgYAh2UvTDm23McaVQXzEMdmr+Qc7puyMHkqvB4WNYzBZbkSPb92dksUf3BvENBWuOcRD28kRcjX7lJQZe5i8P915GQPHvfQgr860tK80wj7imRb+XGRcHlef80RMcN0oTTIMaTnHhc7tDiT5Z8VNvjwM+yJgnHUOmvw6JfeuPHSXKQKBgH9tmW1s8jpPjzAfPTLR2uJySDSvBMASjV1OSyrPNnEeuDHjc/i0COQYlVxS4zt5wm07Z8YN1nOS1fkUPtvCSCWTrtIBfOAQ+kIPYn+tXNEdA/ik0Dj6J5tdHkbQB/G2fArwBrW3zsHIDKS76MCrJSG+jZPOC40ew3aoj0ph65Yi',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => 'wxe973a8c5385f16ef',
        'mch_id'      => '1344618801',
        'key'         => 'PUlYEtupxIQSMvojv3Jf8Xz8WFtA8t6U',
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
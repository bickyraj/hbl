<?php

return [

    "OfficeId" => env('HBL_OFFICE_ID'),

    /**
     * payment end point
     */
    "EndPoint" => "https://core.demo-paco.2c2p.com",

    /**
     * JWE Key Id.
     *
     */
    "EncryptionKeyId" => "7664a2ed0dee4879bdfca0e8ce1ac313",

    /**
     * Access Token.
     *
     */
    "AccessToken" => env('HBL_ACCESS_TOKEN'),

    /**
     * Token Type - Used in JWS and JWE header.
     *
     */
    "TokenType" => "JWT",

    /**
     * JWS (JSON Web Signature) Signature Algorithm - This parameter identifies the cryptographic algorithm used to
     * secure the JWS.
     *
     */
    "JWSAlgorithm" => "PS256",

    /**
     * JWE (JSON Web Encryption) Key Encryption Algorithm - This parameter identifies the cryptographic algorithm
     * used to secure the JWE.
     *
     */
    "JWEAlgorithm" => "RSA-OAEP",

    /**
     * JWE (JSON Web Encryption) Content Encryption Algorithm - This parameter identifies the content encryption
     * algorithm used on the plaintext to produce the encrypted ciphertext.
     *
     */
    "JWEEncryptionAlgorithm" => "A128CBC-HS256",

    /**
     * Merchant Signing Private Key is used to cryptographically sign and create the request JWS.
     *
     */
    "MerchantSigningPrivateKey" => env('HBL_PRIVATE_KEY_JWS'),

    /**
     * PACO Encryption Public Key is used to cryptographically encrypt and create the request JWE.
     *
     */
    "PacoEncryptionPublicKey" => "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAviq4wrTmVMkRHouiHLUonJ1d6ss6nNreJ0JWpLwmTwAM7l35g8AFIvE8PqwWevtjuil9JZ1T1zwQTP8aM3s5/RzX5yFIhec/O14jib7Nmi4jACeJqDlHsnYzeCPw8WOhgmxWKHcORNLpn68jgnhLrKwh3Mooz/hXtIwGuNe/pYU7i/QaiuOjtmIcQ3yxJWjiHsllaogobZjbwMzwhp1fJ6ELmZp0FJvDrE8dn4UU9yzPFNzQ4gJzJAS/JKLXjfDw5mDQdw80vbzYuxksU0bc/3+DwY6hqaVJsP2AST7dCTR1wYzevzPxp0HMDmz1Ia/hSrmTPRhSa0qvxHMriVHUJvJeLTNI3cWM0RI9ukR7/v6vcf8ZwOZ+u7w4YfLpPCQFN7zGUN9Hho0pWBVYOstqsF5h/ZgBOlEHgSYY3CJdscV1+vKUvmFPiwkOdVxhc571RX56o+V71ZIGjXeYeqd3KNnND1JNsOn4hRPbk8Cl0e8CfZnEePfqtbFQGrzRU3GvSXscMb51TlvZu9i0toJdIJ4DiOCkUlB2sDI4x7N9ROOEbAD8uv68/jZqTM2paUNRN7Xvaa2LUCis3acadiyLt0tpuOT0sY2OejhLJshwNfTfc67gdtCJ3diddZWkXYpBgkMhuVj3TSx85sUklbGGJkzkwNsC0JhMSo7ZqbYxczECAwEAAQ==",

    /**
     * PACO Signing Public Key is used to cryptographically verify the response JWS signature.
     *
     */
    "PacoSigningPublicKey" => "MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAkEOCDQxCbyv/n1jadyDDL9KLRddF7W2eVNf7GwVeqlq3CVor0QHiU+yweO3b622NZAPDBy/GFeJJH5lwdJUbYojFWtHUqYN7/HoTHF50KhAbLMhnllsULuyVgG1l3m9xSjRJtQSaIZP5jF4LSM+m69Xd7U2qoTczMOaNZ36yWZzxN/OUQMjb2cWeZCLhVPf6zJwA35kC57NK2n1DDvvyFvLnh9gBd8EOkJuT9us1r01Ya3XpFHhXy1fTg9bmWXDMwMm5stnhmGOF2d6Uv4rYGqk67nRzX0ZEGrWW6X0tzeQESkQShx0algKIXeM/2RBfit1QHDHhI70CYTqt1eG05Cpr5u7FdvD4pk8fqfW8xJsmoZisQNQnov0oriUqrB1wZvWL8+calfoX0nxWMVlP37LspA6O2+dlnjFxpDQSjnfWVFyS6fKvr8jXWI6KG6L11J+yAXY4KjqGK+wEnH2yf8tK8NLkIAWNstlUQrycEkk4mP6ElKwkOMpRND0ArG1cG0uMx+VXd1vrWG6UePa+GHmgHbgLSkjI3hpz3wbpE5cbp73dbIgryeC0AeLY7kKDt7pMQpkg3gNxcvTGXjZYc1TQ5siuD1RBJUR5Lv/P8jjyQnB4D67AEuL1pw5acKQ3tfOEF+iuzzzV5zeSj5T5rYR1GpuPOqTz97AWSxawDUsCAwEAAQ==",

    /**
     * Merchant Decryption Private Key used to cryptographically decrypt the response JWE.
     */
    "MerchantDecryptionPrivateKey" => env('HBL_PRIVATE_KEY_JWE'),

    /**
     * Input Currecy for example USD or NRP.
     */
    "InputCurrency" => "THB",

    /**
     * Input 3DS should be Y for production and N for development
     */
    "Input3DS" => "N",
];

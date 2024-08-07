<?php 

function getDatabaseConfig(): array {
    return [
        "database" => [
            "test" => [
                "url" => "mysql:host=localhost:3306;dbname=system_library_php_native_test",
                "username" => "root",
                "password" => ""
            ],
            "prod" => [
                "url" => "mysql:host=localhost:3306;dbname=system_library_php_native",
                "username" => "root",
                "password" => ""
            ]
        ]
    ];
}
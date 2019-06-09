# BNI CURL Helper

## Usage
```
<?php

use BNI\Curl;

class App {
    public function run() {
        $result = Curl::init()
                    ->url($urlToExecute)
                    ->header([
                        'testHeader' => 'Hello world'
                    ])
                    ->eksekusi();
        return $result;
    }
}

echo App::run();
```
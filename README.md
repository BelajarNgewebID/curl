# BNI Curl Helper
It's just an ordinary helper which help you using curl feature in your PHP project. This is independent repo, so this is flexible to use in any framework. Just install and use you will smile because you was helped with this.

## Installation
```
composer require bni/curl
```

## Usage
This is a minimum code to using this package
```
<?php
include '/vendor/autoload.php';

use BNI\Curl;

class YourController {
    public function yourFunction() {
        $request = Curl::get()
                        ->url('https://api.facebook.com/v1/users/test')
                        ->header([
                            ['apiKey' => '123456'],
                            ['serverKey' => 'asd9uwe'],
                        ])
                        ->eksekusi();
        return $request;
    }
}
```
## API
| Function | Usage |
|----------|-------|
|get(`null`)|initialize get request|
|post(`null`)|initialize post request|
|url(`string`)|set URL / endpoint|
|parameter(`array`)|set URL parameters|
|header(`array`)|set headers request|
|body(`array`)|post form field|
|options(`string` $optionName, `depending optname` $optionValue)|set your own options|
|eksekusi(`null`)|run your request|

### parameter, header, or body usage
```
...
->parameter([
    ['email' => 'hello@google.com']
])
...
```


## Contributing
Feel free to make a big change to this repository. It will help lots of people who didn't know about using curl natively in PHP or someone who don't want use complex built-in function and it will speed up his work.

Make new  branch and create new pull request will be your big step.

## Contact
You can contact me about this repository via telegram on [@haloriyan](https://t.me/haloriyan "Contact via telegram")
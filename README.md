# CopytrapsPHP
 Programmatically or manually create asset, create dispute, grant permissions, create interface, monitor account and fund your account.

### Install:

Use composer to install

```php
composer require mitmelon/CopytrapsPHP
```

### Usage :

```php
require_once __DIR__."/vendor/autoload.php";

$copytraps = new Copytraps(PUBLIC_KEY, PRIVATE_KEY);
$session = $copytraps->authenticate();
if($session['status'] === true){
    //Create copyright or do other things
    $response = $copytraps->createDating(
        array(
            'type' => 'article-text',
            'title' => 'I am a hero',
            'depth' => 'moderate',
            'link' => 'https://myblog.com/i-am-hero',
            'fee'  => '10000',
            'content' => 'Heroes dont die'
        ), $session
    );
    //Returns Json as result
}
```

### NOTE

Please note that this SDK is not yet available for use. We shall release both the SDK along side with the full API to use inside your application once its ready.
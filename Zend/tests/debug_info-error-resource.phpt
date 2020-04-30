--TEST--
Testing __debugInfo() magic method with bad returns RESOURCE
--INI--
allow_url_fopen=1
--FILE--
<?php

class C {
  public function __debugInfo() {
    return fopen("data:text/plain,Foo", 'r');
  }
}

var_dump(new C());
--EXPECTF--
Fatal error: Method C::__debugInfo() must return an ?array in %s on line %d

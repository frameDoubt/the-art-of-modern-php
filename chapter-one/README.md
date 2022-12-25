# Chapter-One - Notes On OOP Basics
---
Objects are instances of a `class`, classes are defined with the keyword `class` followed by the name of the class, commonly starts with an uppercase letter `Dog`; the body of the class, which is surrounded by curly braces `{ }`, is where we we declare properties and functions (methods) that all objects instantiated with this class share.
```php
class Dog {
    public string $dogName;
    public string $dogBreed;
    function __construct($param1, $param2)
    {
        $this->dogName = $param1;
        $this->dogBreed = $param2;
    }
}
```

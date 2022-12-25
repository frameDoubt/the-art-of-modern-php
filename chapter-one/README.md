# Chapter-One - Notes On OOP Basics
---
Objects are instances of a `class`, classes are defined with the keyword `class` followed by the name of the class, commonly starts with an uppercase letter `Dog`; the body of the class, which is surrounded by curly braces `{ }`, is where we we declare properties and methods that all objects instantiated with this class share.
```php
class Dog {
    public string $dogName;
    private string $dogBreed;
    function __construct($param1, $param2)
    {
        $this->dogName = $param1;
        $this->dogBreed = $param2;
    }
}
```
Using the code above as an example we will instantiate an object. We can instantiate an object using the `new` keyword as follows:
```php
$doggo = new Dog("Achroma", "Great Pyrenees");
```
The parameters we passed are assigned to the `$dogName` and `$dogBreed` properties by the object's `__construct()` method. We can access the `$dogName` property with the following statement:
```php
$doggo->dogName;
```
You can also reassign the properties value, provided we haven't declared them with a `private` visibility accessor. We can't access the `$dogBreed` property outside the object, because we declared it with a `private` visibility accessor. If we want to access the `$dogBreed` property we would need to make a method/function to access it from within the object. Any property without an assigned visibility accessor will default to a `public` visibility accessor. We could add the following code to our class, so we can output a string with both properties.
```php
public function nameAndBreedString(): void
{
    echo "This dog is a $this->dogBreed, named $this->dogName <br>";
}
```
> Interesting Note: objects can be assigned new properties by making a new property name while calling the instance of the object `$doggo->crossBreed = "German Shepherd"`, this is called dynamic properties and mutates the original object. With PHP 8.2 this has become deprecated.
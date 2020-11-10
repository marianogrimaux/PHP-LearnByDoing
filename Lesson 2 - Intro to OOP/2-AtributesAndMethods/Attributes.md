# Attributes

Classes have attributes, and those attributes are defined in the class as we learnt in the 
the last lesson.

There two types of attributes:

- Class attributes. (Also known as class variables)
- Instance attributes.  (Also knwon as instance variables).

####Class variables

The main property of class variables is that they will remain the same across all the instances of the class.
They don't deppend on the instance, and no instance of that class can change its value.

Going back to our Greeting class, we can define a class variable.

```php
class Greeter {

	private $name;

	public function __construct(string $name) {
		$this->name = $name;
	}

	public function sayHello() {
		return 'Hello, my name is' . $this->name . '\n';
    }
}
```

If we take a look at this class, all the instances of Greeter will sayHello with same prefix: 'Hello, my name is'.

We could, by design extract that prefix as a class variable.

```php
class Greeter {

    private static $prefix = 'Hello, my name is';
	private $name;

	public function __construct(string $name) {
		$this->name = $name;
	}

	public function sayHello() {
		return self::$prefix . $this->name . '\n';
    }
}
$mariano = new Greeter('Mariano');
echo $mariano->sayHello();
$matu = new Greeter('Matu');
echo $matu->sayHello();
```
Running this code will generate the same output as before, the only difference is that now all the instances
of Greeter will have access to this variable.

####Instance variables 

Instance variables are defined in the class, the only difference with class variables are that they can have different values 
accross the instances of the class. 

In our previews examples we defined the isntance variable $name, that had different values across the different instances of 
the  class Greeter.


####Access
There are three different levels of access, each one of them grants different access levels to the variables.

* **Public**: Any class can refer to the field.
* **Private**:  Only the Class have access to that field.
* **Protected**:  Only the Class and it's subclasses have access to that field. (We'll talk more about this in the inheritance module)

As you may have noticed, our class Greeter has a private attribute: $name. This means that only the class have access to it
and it's actually using it in SayHello method as $this->name. 


```php
class PublicAttribute {
    public $firstName;
    public $lastName;
}

// When having public attributes anyone can change the values
$mariano = new PublicAttribute();
$mariano->firstName = 'Mariano';
$mariano->lastName = 'Grimaux';

// When having public attributes anyone can access the values

echo $mariano->firstName;
echo $mariano->lastName;

```


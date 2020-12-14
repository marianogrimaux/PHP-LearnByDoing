# Attributes

Classes have attributes, and those attributes are defined in the class as we learnt in the 
the last lesson.

There two types of attributes:

- Class attributes. (Also known as class variables)
- Instance attributes.  (Also knwon as instance variables).

####Class variables

The main property of class variables is that they will remain the same across all the instances of the class.
They don't depend on the instance, and no instance of that class can change its value.

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
```
Running this code will generate the same output as before, the only difference is that now all the instances
of Greeter will have access to this variable.

####Instance variables 

Instance variables are defined in the class, the only difference with class variables are that they can have different values 
accross the instances of the class. 

In our previews examples we defined the instance variable $name, that had different values across the different instances of 
the  class Greeter.


#### Access
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

### Encapsulation

By being able to declare attributes as private, protected or public, we arrive to one of the fundamentals of OOP:
Encapsulation.

Lets get a Wikipedia short definition:

In object-oriented programming (OOP), encapsulation refers to the bundling of data with the methods that operate on that
data, or the restricting of direct access to some of an object's components. Encapsulation is used to hide the values or 
state of a structured data object inside a class, preventing unauthorized parties' direct access to them. Publicly 
accessible methods are generally provided in the class (so-called "getters" and "setters") to access the values, and 
other client classes call these methods to retrieve and modify the values within the object.

**What does this mean?**

When designing a class, you want it to have control of its attributes. There will be some of them that in your design you
want them to be changed after the creation of the objects, and there will be some of them that you don't want anyone to
change. 

We'll go futher with encapsulation in next lessons, but I'll leave an example about this concept.

Let's try to model a real world example.

As a citizen, your country provides and ID which is unique for everybody. There cannot be two citizens
(not legally) that share the same Id number. In my case, in Argentina that id is called DNI.

Further more, you can't change your DNI number and you decide if you want to provide that number or not to a person that 
is asking for it.


## Homework

Complete the questions in the PHP file for this lesson, as always commit  them in your fork and push the changes.




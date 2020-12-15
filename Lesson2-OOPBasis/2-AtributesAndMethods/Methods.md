# Methods

Methods will define the behaviour of your classes: What are they meant to do.

Let's get back to our Greeter class:

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
All the instances of your greeter class know how to say hello. But things are a little more complex if you take a deeper 
look:
- Internally, in order to say hello, Greeter understands that it has to concatenate the prefix with his name attribute.

As shown in previous examples, anyone can ask to a greeter instance to say hello by calling sayHello(), but no one knows 
the internal process that a instance of Greeter executes to do so.  

Remember the first line of our definition of Encapsulation: 

**Encapsulation refers to the bundling of data with the methods that operate on that data**


#### Access

There are three different levels of access, each one of them grants different access levels to methods.

* **Public**: Any class can call that method.
* **Private**:  Only the Class have access to that method.
* **Protected**:  Only the Class and it's subclasses have access to that method. (We'll talk more about this in the inheritance module)

As you may have noticed, our class Greeter has a private attribute: $name. This means that only the class have access to it
and it's actually using it in SayHello method as $this->name. 


#### Getters and Setters

##### Getters

Getters are used to return values. The most simple ones, will just return the value for an attribute, others can execute 
a more complex calculation and return it's output.

- Note: Getters are meant to return some value.

Let's change a little bit our Greeter class.

We'll add a getter to return the value set for the name.

```php
class Greeter {

    private static $prefix = 'Hello, my name is';
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sayHello()
    {
       return self::$prefix . $this->name . '\n';
    }
}
$mariano = new Greeter('Mariano');
echo $mariano->sayHello();
echo $mariano->getName();
```
Now lets make our Greeter more powerful. 

- Greeters are very polite objects, and if they met another greeter they will give greetings to it.

Let's make a quick change to our class.

```php
class Greeter {

    private static $prefix = 'Hello, my name is';
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sayHello(string $greeterName = null)
    {
       return $greeterName ? self::$prefix  . $this->name . ' , nice to meet you ' . $greeterName:
       self::$prefix . $this->name;
    }
}

$mariano = new Greeter('Mariano');
echo $mariano->sayHello();
$matu = new Greeter('Matu');
echo $mariano->sayHello($matu->getName());
```

##### Setters

Setters are meant to assign new values to the attribute in runtime, if we think about it, they allow us change the state of the object. 

It's important for you to know that not all the attributes must have a setter, there are things that 
you don't want to change after the instantiation of the object. In order to go deeper with this concept, let's get back to our Citizen's example.

Again, thinking about the real world we can undertand how Citizens attributes can change in their lives.

- A citizen can change it's name.
- A citizen can change it's last name.
- A citizen cannot change his DNI.

```php

<?php

class Citizen
{
    private $dni;
    private $name;
    private $lastName;

    public function __construct($dni, $name, $lastName)
    {
        $this->dni = $dni;
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

}
```

 
##### Private methods

In order to explain private methods, let's go back to our Greeter example.
and add some new stuff to our class. 

If you are at work you'll try to keep good manners and use a formal way of speaking, but when you are with your friends
you are more informal, and even use some slang when saying hello.

Lets change our Greeter class, so It can decide if use formal or informal greetings.

```php
class Greeter {

    private $name;
    private $context;

    public function __construct(string $name, $context)
    {
        $this->name = $name;
        $this->context = $context;
    }

    public function setContext($context)
    {
        $this->context = $context;
    }

    private function giveInformalGreetings()
    {
        return "Hi!, my name is " . $this->name;
    }

    private function giveFormalGreetings()
    {
        return "Hello, my name is " . $this->name;
    }

    public function sayHello()
    {
        if ($this->context == 'work')
        {
            $greetings = $this->giveFormalGreetings();
        } else {
            $greetings = $this->giveInformalGreetings();
        }
        return $greetings;
    }
}
$greeter = new Greeter("Mariano", "work");
echo $greeter->sayHello();
$greeter->setContext("friends");
echo $greeter->sayHello();
```
Now, our Greeter class is able to calculate greetings depending on the context, note that, we are still calling the 
sayHello method, but internally our Gretter class takes advantage of private methods in order to give greetings.





  






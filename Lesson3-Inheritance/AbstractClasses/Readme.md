# Abstract Classes

Abstract classes have 2 main characteristics
1. They cannot be instantiated directly.
2. They can provide abstract methods.

##An introduction to abstract classes.

Remember that OOP is about modeling objects and concepts that we can find in the reality, abstract classes will be commonly 
associated with concepts that we need to define in order to come up with a good design.
Abstract classes provide attributes and behaviour to it's sub-classes, if they provide abstract methods, then those methods
will have to be implemented by the sub-classes.

Let's revisit our Animals hierarchy in order to explore abstract classes.


```php
class Animal {
    
    protected $name;
    
    public function getName() {
        return $this->name;
    }
    
    public function setName(string $name) {
        $this->name = $name;
    }

}
```

In our previous lesson we created the class Animal, but notice that in none of the examples we created a 
new Animal, and it makes a lot of sense. In real life, we find lions, dogs, cats but no instance of animal.
If modeling the animal kingdom in OOP that could be a hint that our Animal class should be abstract.

```php
abstract class Animal {
    
    protected $name;

    public function __construct(string $name) {
        $this->name = $name;
    }    
    
    public function getName() {
        return $this->name;
    }
  
}
```

By declaring our class abstract we will not able to instantiate it directly. Let's add some subclasses to our code

```php
{
    abstract class Animal {

        protected $name;
        
        public function __construct(string $name) {
            $this->name = $name;
        }    
        
        public function getName() {
          return $this->name;
        }   
    } 
  
    class Lion extends Animal {
        
        public function roar() {
            echo "Roaaaaar\n";
        }
    }
    
    class Dog extends Animal {

        public function bark() {
            echo "Bark Bark\n";
        }
    }
    
    class Cat extends Animal {  
        
        public function meow() {
            echo "Meow\n";
        }
    }
}
```  
Before continue take a look at [Abstract class example - 1](./Practice/AbstractClass1.php)


## Abstract methods

The idea of abstract methods is to declare behaviour in an abstract class without taking care about how
the sub-classes are going to implement them. This concept comes very handy when designing a hierarchy and prepare our code
to be able to work with abstractions over implementations.

If we go further with our animal hierarchy, we can find that all animals that we declared have the capability
of making sounds, those sounds are different for each one of them. This is when abstract methods come to the rescue.

Let's change our code so Animals implement abstract methods. 

```php
{
  {
      abstract class Animal {
  
          protected $name;
  
          public function __construct(string $name) {
              $this->name = $name;
          }
  
          /*
           * By declaring makeSound as abstract I will be forcing all the
           * subclasses to implement the makeSound method that returns a string
           */
          abstract public function makeSound() : string;
  
          public function getName() : string
          {
              return $this->name;
          }
      }
  
      class Lion extends Animal {
  
          public function makeSound() : string
          {
              echo "Roaaaaar\n";
          }
      }
  
      class Dog extends Animal {
  
          public function makeSound() : string
          {
              echo "Bark Bark\n";
          }
      }
  
      class Cat extends Animal {
  
          public function makeSound() : string
          {
              echo "Meow\n";
          }
      }
  }
}
```  
Before continue take a look at [Abstract class example - 2](./Practice/AbstractClass2.php)

# Composition

Composition is one of the fundamental concepts in object-oriented programming. 
It describes a class that references one or more objects of other classes in instance variables. 
By doing this, your objects will be related with others (Association), this means that they can communicate with each 
other.

You can find composition with real world examples, a car for example has  4 wheels, an engine, a number of seats etc. Each
of these components have a specific purpose and a function.

## Car Example

```php
class Engine {

    private $hp;
    private $manufacturer;
    private $serialNumber;
    private $fuelType;

    public function start()
    {
      echo "Engine Started\n";   
    }
    
    public function stop()
    {
      echo "Engine Stopped\n";       
    }

}

class Car {
    
    private $engine;
    
    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }
    
    public function ride()  {
          // some code
          $this->engine->start();
           // Continues code of ride   
    }
    
    public function endRide() 
    {
        // some code
        $this->engine->stop();
        // some code
    }

}
```

## Composition vs Inheritance

Inheritance was another way to reuse behaviour, but what is the difference with composition?
The key to that answer is to think about the difference between "is" and "has".

1. A Car has an Engine. (Composition)
2. A Human is a Mammal, and a Mammal is an Animal. (Inheritance)

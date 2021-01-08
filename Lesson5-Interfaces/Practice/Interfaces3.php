<?php

/**
 *  Your company uses Mysql in order to store data.
 *  For performance reasons they want to migrate the storage of some objects to MongoDb.
 *  As this kind of projects take long time, the first actionable is to make the code able to support both types of
 *  connections.
 *  The classes involved in order to persist objects are the following.
 */

class MyslqConnection {

    // Stablishes the database connection
    function connect() : void {}

    // Executes insert, update delete
    function executeQuery(string $query) : void {}

    // Used for selects and returns an array with the results.
    function getQuery(string $query) : array {}

    function disconnect() : void {}
}

class PersonDao {

    /*
     * DAO means data access object, it's a common pattern used in order to handle the persistance layer.
     *  You can read more about daos in https://es.wikipedia.org/wiki/Objeto_de_acceso_a_datos
     */
    private $connection;

    public function __construct(MyslqConnection $connection)
    {
        $this->connection = $connection;
    }


    /*
     * The code below wont work in a real scenario, it's just a sample to give a better picture about
     * what this method would be like.
     */
    public function searchBy(array $criteria) : array
    {
        $this->connection->connect();
        $query = 'SELECT * FROM person where ';
        foreach ($criteria as $field => $value) {
            $query .= $field . ' = ' . $value;
        }
        $results = $this->connection->getQuery($query);
        // Creates the objects from the array of resutls.
        $this->connection->disconnect();
        return $results;
    }

    public function save(Person $person) : void
    {
        $this->connection->connect();
        $query = "INSERT INTO PERSON (id, name) VALUES {$person->getId()} , {$person->getName()}";
        $results = $this->connection->executeQuery($query);
        // Creates the objects from the array of resutls.
        $this->connection->disconnect();
        return $results;
    }
}

class Person {

    private $id;
    private $name;

    public function getId() : int
    {
        return $this->id;
    }

    public function getName() : string
    {
        return $this->name;
    }
}

/**
 *  Task 1:
 *
 *  As you are a great programmer, the task of supporting mysql and mongoDB connections was assigned to you.
 *  How would you do this?
 *
 *  Consider that the company expects to be able to make the same operations present in mysql in the new MongoDb connection
 *
 *  Please commit the canges needed and also the class diagram for the solution.
 */


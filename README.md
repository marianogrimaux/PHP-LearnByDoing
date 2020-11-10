# PHP-LearnByDoing
Project for educational purposes


### Docker Installation 

1. [Install docker](https://docs.docker.com/get-docker/) & [docker-compose](https://docs.docker.com/compose/install/). 

2. In the project folder, run the following command:
    
    `docker-compose up -d`
    
    Once it's done check that your php container is running by 
    
3. In order to access the PHP container execute:
    
    `docker exec -ti php-learnbydoing_app_1 bash`
    
   you should see something like this:
   > I have no name!@e36809ff2dc1:/app$ 

4. You can run any of the lesson examples by typing the following command:

     `php Lesson1-PHPBasis/HelloWorld.php`
     
     the output should be something like this:
     >Hello world!! 

### The course

In the project directory, you'l find a different folders containing the classes and exercises for each topic that we 
will try to cover. 

You will find a .md file that contains the concepts and examples for each class, and a series of .php files that you will be able to 
execute in order to understand how things work along with those concepts. 

All the php files, have a comment in the end with some exercises and questions related to the concepts presented in the 
class. When doing those, the idea is that you commit your answers in those files so we can revisit them at the begining 
of the following class and dedicate some time to clear some doubts that appeared while you were completing them.

                                                                                                                                           


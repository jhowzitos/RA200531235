<?php

namespace App\Entity;

class vagaAluno{

   /**
    * id unico da vagaAluno
    *@var integer
    * */ 
    public $id;

    /**
    * nome do aluno da vagaAluno
    *@var string
    * */ 
    public $name;

    /**
    * id unico da vagaAluno
    *@var string
    * */ 
    public $email;

    /**
    * senha da vagaAluno
    *@var string
    * */ 
    public $password;

    /**
    * fone da vagaAluno
    *@var integer
    * */ 
    public $phone;

    /**
    * course da vagaAluno
    *@var string
    * */ 
    public $course;

    /**
    * define se a vagaAluno esta ativa
    *@var string (s/n)
    * */ 
    public $status;


    /**
    * data da publicação da  vagaAluno
    *@var integer
    * */ 
    public $created_at;


     /**
    * data de alteração da  vagaAluno
    *@var integer
    * */ 
    public $updated_at;

    



}
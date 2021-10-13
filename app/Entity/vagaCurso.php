<?php

namespace App\Entity;

class vagaCurso{

   /**
    * id unico da vagaCurso
    *@var integer
    * */ 
    public $id;

    /**
    * nome do curso da vagaCurso
    *@var string
    * */ 
    public $nameCOURSE;

    /**
    * drescrição da vagaCurso
    *@var string
    * */ 
    public $DESCRPTION;

    /**
    * inicio do vagaCurso
    *@var string
    * */ 
    public $dateSTART;

    /**
    * encerramento do vagaCurso
    *@var string
    * */ 
    public $dateFINISH;

   

    /**
    * define se a vagaCurso esta ativa
    *@var string (s/n)
    * */ 
    public $STATUS;


    /**
    * data da publicação da  vagaCurso
    *@var integer
    * */ 
    public $CREATED_AT;


     /**
    * data de alteração da  vagaCurso
    *@var integer
    * */ 
    public $UPDATED_AT;

    



}
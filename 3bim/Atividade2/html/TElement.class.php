<?php
  /**
  *classe TElement
  *classe para abstração de tags HTML
  */
  class TElement
  {
    private $name;       // nome da tag
    private $properties; // propriedades da tag
    private $children;   // conteúdo da tag
    /**
    * método construtor
    * instancia uma tag html
    * @param $name nome da tag
    */
    public function __construct($name)
    {
      //define o nome do elemento
      $this->name = $name;
    }
    /**
    * método __set()
    * intercepta as atribuições à propriedade do objeto
    * @param $name nome da propriedade
    * @param $value valor
    */
    public function __set($name, $value)
    {
      // armazena os valores atribuidos
      // ao array properties
      $this->properties[$name] = $value;
    }
    /**
    * método add()
    * adiciona um elemento filho
    * @param $child objeto child
    */
    public function add($child)
    {
      $this->children[] = $child;
    }
    /**
    * método open()
    * exibe a tag de abertura na tela
    */
    private function open()
    {
      // exibe a tag de abertura
      echo "<{$this->name}";
      if($this->properties)
      {
        // percorre as propriedades
        foreach($this->properties as $name=>$value)
        {
          echo " {$name}=\"{$value}\"";
        }
      }
      echo '>';
    }
    /**
    * método show()
    * exibe a tag na tela, juntamente com seu conteúdo
    */
    public function show()
    {
      //abre a tag
      $this->open();
      // se possui conteúdo
      if($this->children)
      {
        //percorre todos os objetos-filho
        foreach($this->children as $child)
        {
          // se for objeto
          if(is_object($child))
          {
            $child->show();
          }
          else if((is_string($child)) or (is_numeric($child)))
          {
            echo $child;
          }
        }
        // fecha a tag
        $this->close();
      }
    }
    /** método close()
    * fecha uma tag html
    */
    private function close()
    {
      echo "</{$this->name}>";
    }
  }
?>

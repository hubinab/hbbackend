<?php
namespace Culture\Movie;
class Quotation {
    private string $text;
    private string $person;
    private string $title;

    public function __construct($text, $person, $title){
        $this->text = $text;
        $this->person = $person;
        $this->title = $title;
    }

    public function getText():string{
        return $this->text;
    }
    public function getPerson():string{
        return $this->person;
    }
    public function getTitle():string{
        return $this->title;
    }

    public function setText(string $text):void{
        $this->text = $text;
    }
    public function setPerson(string $person):void{
        $this->person = $person;
    }
    public function setTitle(string $title):void{
        $this->title = $title;
    }

    // public function __get($nev):mixed {
    //     return $this->$nev;
    // }

    // public function __set($nev,$ertek):void {
    //     $this->$nev = $ertek;
    // }

}
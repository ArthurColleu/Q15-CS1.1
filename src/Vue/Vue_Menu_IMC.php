<?php

namespace App\Vue;

class Vue_Menu_IMC
{
    public function __construct( )
    {           }
    function donneTexte(): string
    {

        return "
             <nav id='menu'>
              <ul id='menu-closed'> 
                <li><a href='?case=A'>cas A</a></li>
                <li><a href='?case=B'>cas B</a></li>  
                <li><a href='?case=IMC'>****calcul IMC****</a></li>   
                <li><a href='?calculOrage'>cas Orage</a></li>  
                   </ul>
            </nav> 
";

    }

}
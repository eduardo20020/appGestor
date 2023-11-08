<?php

class Carpeta{

/*
Aqui empiezan los
metodos de la clase Carpeta
*/ 
   public function crear($nombre){  //metodo para crear carpetas
        $ruta = '../CARPETAS/';
        if (!file_exists($ruta.$nombre)) {
            if (mkdir($ruta.$nombre, 0755)) {
                echo "La carpeta se ha creado con éxito.";
            } else {
                echo "No se pudo crear la carpeta.";
            }
        } else {
            echo "La carpeta ya existe.";
        }
    }

    public function borrar($nombre){  //metodo para borrar carpetas
        $ruta = '../CARPETAS/';
        if (is_dir($ruta.$nombre)) {
            if (rmdir($ruta.$nombre)) {
                echo "La carpeta se ha eliminado con éxito.";
            } else {
                echo "No se pudo eliminar la carpeta.";
            }
        } else {
            echo "La carpeta no existe o no es una carpeta válida.";
        }
    }

    public function editar($nombre,$nuevo){   //metodo para renombrar carpetas
        $ruta = '../CARPETAS/';
        if (rename($ruta.$nombre, $ruta.$nuevo)) {
            echo "La carpeta se ha renombrado con éxito.";
        } else {
            echo "No se pudo renombrar la carpeta.";
        }
    }



}

?>
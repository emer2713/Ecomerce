<?php

    //Key Value From Json
    function kvfj($json, $key)
    {
        if($json == null):
            return null;
        else:
            $json = $json;
            $json = json_decode($json, true);
            if(array_key_exists($key, $json)):
                return $json[$key];
            else:
                return null;
            endif;
        endif;
    }

    function getModulesArray()
    {
        $a = [
            "0" => 'Productos',
            "1" => 'Blog',
        ];
        return $a;
    }
    function getFrontArray()
    {
        $a = [
            "YES" => 'Si',
            "NO" => 'No',
        ];
        return $a;
    }
    function getStatesArray()
    {
        $a = [
            "0" => 'Descuento',
            "1" => 'Nuevo',
            "2" => 'Oferta',
            "3" => 'Rebaja',
            "4" => 'Destacado',

        ];

        return $a;
    }

    function getRoleUserArray($mode, $id)
    {

        $roles = ['0' => 'Usuario normal', '1' => 'Administrador', '2' => 'Gerente', '3' => 'Cajero', '4' => 'Mesero', '5' => 'Barra', '6' => 'Cocina', '7' => 'Proveedor'];
        if(!is_null($mode)):

            return $roles;

        else:

            return $roles[$id];

        endif;


    }
        function getRoleEmployeeArray($mode, $id)
    {

        $roles = ['0' => 'Gerente', '1' => 'Cajero', '2' => 'Mesero', '3' => 'Barra', '4' => 'Cocina', '5' => 'Proveedor'];
        if(!is_null($mode)):

            return $roles;

        else:

            return $roles[$id];

        endif;


    }

    function getUserStatusArray($mode, $id)
    {

        $status = ['0' => 'Registrado', '1' => 'Verificado', '100' => 'Baneado'];
        if(!is_null($mode)):

            return $status;

        else:

            return $status[$id];

        endif;

    }
?>

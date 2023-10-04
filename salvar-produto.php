<?php

    switch($_REQUEST["acaoproduto"]) {
        case 'cadastrarproduto':
             $codigo = $_POST["codigo"]; 
             $descricao = $_POST["descricao"]; 
             $valor = $_POST["valor"];   

             $sql = "INSERT INTO produtos (codigo, 
             descricao, valor) VALUES (
                '{$codigo}', '{$descricao}', '{$valor}')";

             $resprod =  $conn->query($sql);     
             if($resprod==true)
             { print "<script>alert('Cadastro de produto efetuado com sucesso!');</script>";
               print "<script>location.href='?page=produtolistar';</script>";

             }else
             { print "<script>alert('Não foi possível cadastrar o produto!');</script>";
            print "<script>location.href='?page=produtolistar';</script>";

             }   
        break;

        case 'editarproduto':
            $codigo = $_POST["codigo"]; 
            $descricao = $_POST["descricao"]; 
            $valor = $_POST["valor"];   
            
            $sql = "UPDATE produtos SET 
            codigo='{$codigo}',
            descricao='{$descricao}', 
            valor='{$valor}' 
            
            WHERE 
            id_produto=".$_REQUEST["id_produto"];

            $resprod = $conn->query($sql);     
             if($resprod==true)
             { print "<script>alert('Produto atualizado!');</script>";
               print "<script>location.href='?page=produtolistar';</script>";

             }else
             { print "<script>alert('Não foi possível editar!');</script>";
            print "<script>location.href='?page=produtolistar';</script>";

             }   
        break;

        case 'excluirproduto':

          $sql = "DELETE FROM produtos WHERE id_produto=".$_REQUEST["id_produto"];

          $resprod =  $conn->query($sql);     
             if($resprod==true)
             { print "<script>alert('Produto removido!');</script>";
               print "<script>location.href='?page=listarproduto';</script>";

             }else
             { print "<script>alert('Não foi possível excluir!');</script>";
            print "<script>location.href='?page=listarproduto';</script>";

             }   

        break;
    }
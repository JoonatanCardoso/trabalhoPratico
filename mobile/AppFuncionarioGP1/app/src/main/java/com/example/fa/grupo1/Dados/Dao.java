package com.example.fa.grupo1.Dados;

import com.example.fa.grupo1.Entidades.Funcionario;

import java.util.LinkedList;
import java.util.List;

public class Dao {

    private static List lista;
    private static int indice;



    public static void salvarFuncionario(Funcionario newFuncionario) {
        if(lista.contains(newFuncionario))
            lista.set(lista.indexOf(newFuncionario), newFuncionario);
        else{
            newFuncionario.setId(indice);
            lista.add(newFuncionario);
            indice++;
        }
    }

    public static List getLista(){

        if(lista == null){
            lista = new LinkedList();
            indice = 0;
        }
        return lista;
    }

}

package com.example.maitan.projet.dados;

import com.example.maitan.projet.entidade.Locacao;

import java.util.LinkedList;
import java.util.List;

public class Dao {

    private static List lista;
    private static int indice;

    public static void salvarLocacao(Locacao novaLocacao) {
        if(lista.contains(novaLocacao))
            lista.set(lista.indexOf(novaLocacao), novaLocacao);
        else{
            novaLocacao.setId(indice);
            lista.add(novaLocacao);
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

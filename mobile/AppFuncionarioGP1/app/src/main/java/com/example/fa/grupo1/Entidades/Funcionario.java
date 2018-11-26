package com.example.fa.grupo1.Entidades;

import java.io.Serializable;

public class Funcionario implements Serializable{
    private Integer id;

    private String endereco;
    private String cargo;
    private String data;
    private String nome;
    private String cpf;
    private String rg;


    public void setCpf(String cpf) {
        this.cpf = cpf;
    }

    public String getRg() {
        return rg;
    }

    public void setRg(String rg) {
        this.rg = rg;
    }

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    public String getCargo() {
        return cargo;
    }

    public void setCargo(String cargo) {
        this.cargo= cargo;
    }

    public String getData() {
        return data;
    }

    public void setData(String data) {
        this.data = data;
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getCpf() {
        return cpf;
    }


    @Override
    public String toString() {
        return  "ID:" + id + "\n"+
                "Nome:" + nome + "\n"+
                "Cpf:" + cpf +"\n"+
                "Rg:" + rg + "\n" +
                "Endereco:" + endereco+"\n"+
                "Cargo:" + cargo+"\n"+
                "Data:"+data+"\n";
    }
}

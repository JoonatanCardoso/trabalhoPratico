package com.example.maitan.projet.entidade;

import java.io.Serializable;


public class Locacao implements Serializable {//entidade locacao
    private Integer id;
    private String veiculoLocacao;
    private String dataEncerramento;
    private Float km;
    private String status;
    private String dataLocacao;
    private String clienteLocacao;


    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getDataLocacao() {
        return dataLocacao;
    }

    public void setDataLocacao(String dataLocacao) {
        this.dataLocacao = dataLocacao;
    }

    public String getClienteLocacao() {
        return clienteLocacao;
    }
    public Float getKm() {
        return km;
    }

    public void setKm(Float km) {
        this.km = km;
    }

    public String getStatus() {
        return status;
    }

    public void setStatus(String status) {
        this.status = status;
    }

    public void setClienteLocacao(String clienteLocacao) {
        this.clienteLocacao = clienteLocacao;
    }

    public String getVeiculoLocacao() {
        return veiculoLocacao;
    }

    public void setVeiculoLocacao(String veiculoLocacao) {
        this.veiculoLocacao = veiculoLocacao;
    }

    public String getDataEncerramento() {
        return dataEncerramento;
    }

    public void setDataEncerramento(String dataEncerramento) {
        this.dataEncerramento = dataEncerramento;
    }



    @Override
    public String toString() {
        return  "ID:  " + id + "\n" + "Data Locação:  " + dataLocacao + "\n" + "Cliente:  " + clienteLocacao + "\n" +
                "Veículo:  " + veiculoLocacao + "\n" + "Data Encerramento:  " + dataEncerramento + "\n" + "Quilometragem:  " + km + "\n" +
                "Status Locação:  " + status + "\n";
    }
}

package com.example.fa.grupo1.Dados;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

public class Banco extends SQLiteOpenHelper{

    public Banco(Context context) {
        super(context, "dblocadora", null, 1);
        //Criacao do banco locadora
    }

    @Override
    public void onCreate(SQLiteDatabase db) {

        //sql banco funcionario
        String sqlFuncionario = "CREATE TABLE IF NOT EXISTS FUNCIONARIO(" +
                "ID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL," +
                "NOME VARCHAR(150)," +
                "CPF VARCHAR(11)," +
                "RG VARCHAR(11)," +
                "ENDERECO VARCHAR(250)," +
                "CARGO VARCHAR(25)," +
                "DATA VARCHAR(15))";
        db.execSQL(sqlFuncionario);
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {

    }
}
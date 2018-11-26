package com.example.maitan.projet.dados;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

public class Banco extends SQLiteOpenHelper{

    public Banco(Context context) {
        super(context, "dblocadora", null, 1);
        //CRIAÇÃO DO BANCO DE DADOS.
    }

    @Override
    public void onCreate(SQLiteDatabase db) {


        String sqlLocacao = "CREATE TABLE IF NOT EXISTS LOCACAO(" +
                "ID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL," +
                "DATALOCACAO VARCHAR(45)," +
                "CLIENTE VARCHAR(45)," +
                "VEICULO VARCHAR(45)," +
                "DATAENCERRAMENTO VARCHAR(45)," +
                "KM VARCHAR(30)," +
                "STATUS VARCHAR(15))";
        db.execSQL(sqlLocacao);


    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {

    }
}
package com.example.fa.grupo1.Telas;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;

import com.example.fa.grupo1.R;


public class Principal extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_principal);
    }


    //chama Tela FUncionario
    public void acaoFuncionarios(View view){
        Intent it = new Intent(Principal.this, ListarFuncionario.class);
        startActivity(it);
    }



}

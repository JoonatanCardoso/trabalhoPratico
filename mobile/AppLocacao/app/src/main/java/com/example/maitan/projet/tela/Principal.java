package com.example.maitan.projet.tela;

import android.content.Intent;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;

import com.example.maitan.projet.R;


public class Principal extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_principal);
    }

    public void acaoLocacao(View view){
        Intent it = new Intent(Principal.this, ListarLocacao.class);
        startActivity(it);
    }



}

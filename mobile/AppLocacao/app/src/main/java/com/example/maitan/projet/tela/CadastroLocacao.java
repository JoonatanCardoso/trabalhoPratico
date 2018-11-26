package com.example.maitan.projet.tela;

import android.content.ContentValues;
import android.content.Intent;
import android.database.sqlite.SQLiteDatabase;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import com.example.maitan.projet.dados.Banco;
import com.example.maitan.projet.entidade.Locacao;
import com.example.maitan.projet.R;

public class CadastroLocacao extends AppCompatActivity {

    private EditText etDataLocacao;

    private EditText etCliente;

    private EditText etVeiculo;

    Banco bd;
    private SQLiteDatabase conexao;
    private Locacao novaLocacao;

    String dataEncerramento = "Não Informada";//DEFININDO A DATA.
    String status = "ATIVA";//DEFININDO O STATUS DA LOCACAO.


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cadastrolocacao);

        etDataLocacao = findViewById(R.id.etDataLocacao);

        etCliente = findViewById(R.id.etCliente);

        etVeiculo = findViewById(R.id.etVeiculo);

        Intent it = getIntent();//PUXANDO DADOS DE OUTRAS TELAS.

        etCliente.setText(it.getStringExtra("cliente"));//PUXANDO O CLIENTE.
        etVeiculo.setText(it.getStringExtra("veiculo"));//PUXANDO O VEICULO.

    }

    //
    private void inserir(){
        bd = new Banco(this);

        try {
            conexao = bd.getWritableDatabase();
            ContentValues values = new ContentValues();
            values.put("DATALOCACAO", novaLocacao.getDataLocacao());
            values.put("CLIENTE", novaLocacao.getClienteLocacao());
            values.put("VEICULO", novaLocacao.getVeiculoLocacao());
            values.put("DATAENCERRAMENTO", dataEncerramento);
            values.put("STATUS", status);

            conexao.insert("LOCACAO", null, values);
            conexao.close();
            Toast.makeText(this, "Locação salva com sucesso!", Toast.LENGTH_SHORT).show();
        }catch (android.database.SQLException e){
            Toast.makeText(this, "Erro ao salvar a locação!", Toast.LENGTH_SHORT).show();
        }
    }

    //AÇÃO DO BOTÃO QUE CRIA UMA NOVA LOCAÇÃO E PUXA O METODO DE INSERIR.
    public void acaoSalvar(View view){

        if(novaLocacao == null)
            novaLocacao = new Locacao();
            novaLocacao.setDataLocacao(etDataLocacao.getText().toString());
            novaLocacao.setClienteLocacao(etCliente.getText().toString());
            novaLocacao.setVeiculoLocacao(etVeiculo.getText().toString());
            inserir();
            finish();
    }

    //AÇÃO DE SAIR DO BOTÃO.
    public void acaoSair(View view){
        finish();
    }


    //PUXA O CLIENTE E O VEICULO DA LISTA ONDE O CLIENTE TEM UM RESUL CODE 2 E O VEICULO UM RESULT CODE3.
    @Override
    protected void onActivityResult(int requestCode, int resultCode, @Nullable Intent data) {
        super.onActivityResult(requestCode, resultCode, data);
        if(resultCode == 2) {
            etCliente.setText(data.getStringExtra("cliente"));
        } if (resultCode == 3) {
            etVeiculo.setText(data.getStringExtra("veiculo"));
        }
    }


}

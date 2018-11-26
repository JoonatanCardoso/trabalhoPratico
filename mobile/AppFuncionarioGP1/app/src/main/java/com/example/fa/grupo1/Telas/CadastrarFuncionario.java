package com.example.fa.grupo1.Telas;

import android.content.ContentValues;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.EditText;
import android.widget.Toast;

import com.example.fa.grupo1.Dados.Banco;
import com.example.fa.grupo1.Entidades.Funcionario;
import com.example.fa.grupo1.R;

public class CadastrarFuncionario extends AppCompatActivity {
    //VARIAVEIS GLOBAIS
    Banco bd;
    private SQLiteDatabase conexao;
    private Funcionario nFuncionario;

    private EditText Endereco;
    private EditText Cargo;
    private EditText Data;
    private EditText Nome;
    private EditText Cpf;
    private EditText Rg;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_cadastrarfuncionario);

        Nome = findViewById(R.id.etNome);
        Cpf = findViewById(R.id.etCpf);
        Rg = findViewById(R.id.etRg);
        Endereco = findViewById(R.id.etEndereco);
        Cargo = findViewById(R.id.etCargo);
        Data = findViewById(R.id.etData);

    }
    //INSERI FUNCIONARIO NO BANCO DE DADOS
    private void inserir(){
        bd = new Banco(this);

        try {
            conexao = bd.getWritableDatabase();
            ContentValues values = new ContentValues();
            values.put("NOME", nFuncionario.getNome());
            values.put("CPF", nFuncionario.getCpf());
            values.put("RG", nFuncionario.getRg());
            values.put("ENDERECO", nFuncionario.getEndereco());
            values.put("CARGO", nFuncionario.getCargo());
            values.put("DATA", nFuncionario.getData());

            conexao.insert("FUNCIONARIO", null, values);
            conexao.close();
            Toast.makeText(this, "Funcionario cadastrado com sucesso!", Toast.LENGTH_SHORT).show();
        }catch (android.database.SQLException e){
            Toast.makeText(this, "Erro ao cadastrar o Funcionario!", Toast.LENGTH_SHORT).show();
        }
    }
    //SALVA A INSERCAO
    public void acaoSalvar(View view){

        if(nFuncionario == null)
            nFuncionario= new Funcionario();
        nFuncionario.setNome(Nome.getText().toString());
        nFuncionario.setCpf(Cpf.getText().toString());
        nFuncionario.setRg(Rg.getText().toString());
        nFuncionario.setEndereco(Endereco.getText().toString());
        nFuncionario.setCargo(Cargo.getText().toString());
        nFuncionario.setData(Data.getText().toString());
        inserir();
        finish();
    }

    public void acaoSair(View view){
        finish();
    }
}

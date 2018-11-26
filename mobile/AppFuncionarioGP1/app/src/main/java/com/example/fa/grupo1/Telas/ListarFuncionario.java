package com.example.fa.grupo1.Telas;

import android.content.Intent;
import android.database.Cursor;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.ListView;
import android.widget.Toast;

import com.example.fa.grupo1.Dados.Banco;
import com.example.fa.grupo1.Entidades.Funcionario;
import com.example.fa.grupo1.R;

import java.util.LinkedList;
import java.util.List;

public class ListarFuncionario extends AppCompatActivity {

    Banco bd;
    private ListView listFuncionario;
    private SQLiteDatabase conexao;
    //variaveis globais
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_listarfuncionario);
        listFuncionario = findViewById(R.id.listarFuncionario);
        conexaoBD();
        acoes();
    }
    //acao ao clicar na lista
    private void acoes() {
        listFuncionario.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> adapterView, View view, int position, long id) {
                Intent it = new Intent(ListarFuncionario.this, EditarFuncionario.class);
                Funcionario nFuncionario = (Funcionario) adapterView.getItemAtPosition(position);
                it.putExtra("id", nFuncionario.getId());
                it.putExtra("nome", nFuncionario.getNome());
                it.putExtra("cpf", nFuncionario.getCpf());
                it.putExtra("rg", nFuncionario.getRg());
                it.putExtra("endereco", nFuncionario.getEndereco());
                it.putExtra("cargo", nFuncionario.getCargo());
                it.putExtra("data", nFuncionario.getData());

                startActivity(it);
            }
        });
    }
    //conexao banco
    private void conexaoBD() {
        try {
            bd = new Banco(this);
            Toast.makeText(this, "Conexão Ok!", Toast.LENGTH_SHORT).show();
        }catch (SQLException e){
            AlertDialog.Builder msg = new AlertDialog.Builder(this);
            msg.setTitle("Erro");
            msg.setMessage("Erro ao conectar ao Banco");
            msg.setNeutralButton("Ok",null);
            msg.show();
        }
    }
    // Puxa do banco uma lista de funcionario
    private List listafuncionario(){
        conexao = bd.getWritableDatabase();
        List funci =  new LinkedList();
        Cursor res = conexao.rawQuery("SELECT * FROM FUNCIONARIO", null);
        if(res.getCount()>0){
            res.moveToFirst();
            do{
                Funcionario funcionario = new Funcionario();
                funcionario.setId(res.getInt(res.getColumnIndexOrThrow("ID")));
                funcionario.setNome(res.getString(res.getColumnIndexOrThrow("NOME")));
                funcionario.setCpf(res.getString(res.getColumnIndexOrThrow("CPF")));
                funcionario.setRg(res.getString(res.getColumnIndexOrThrow("RG")));
                funcionario.setEndereco(res.getString(res.getColumnIndexOrThrow("ENDERECO")));
                funcionario.setCargo(res.getString(res.getColumnIndexOrThrow("CARGO")));
                funcionario.setData(res.getString(res.getColumnIndexOrThrow("DATA")));

                funci.add(funcionario);
            }while (res.moveToNext());
        }
        return funci;
    }
//CADASTRA FUNCIONARIO
    public void acaoCadastrar(View view){
        Intent it = new Intent(ListarFuncionario.this, CadastrarFuncionario.class);
        startActivity(it);
    }

    public void acaoSair(View view){
        finish();
    }


    @Override
    protected void onResume() {
        super.onResume();

        ArrayAdapter <Funcionario> arrayAdapter = new ArrayAdapter<>(this,android.R.layout.simple_list_item_1, listafuncionario());
        listFuncionario.setAdapter(arrayAdapter);
    }
}
